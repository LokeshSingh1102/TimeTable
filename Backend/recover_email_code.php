<?php
include("config.php");
$p=$_GET['p'];

if(isset($_POST['password_reset_link']))
{
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $token= md5(rand());
    if($p=="t"){
        $check_email="SELECT * FROM teacher_data WHERE email='$email' LIMIT 1";
        $check_email_run= mysqli_query($conn, $check_email);

        if(mysqli_num_rows($check_email_run)>0){
            $update_token="UPDATE teacher_data SET login_token='$token' WHERE email='$email' LIMIT 1";
            $update_token_run= mysqli_query($conn, $update_token);

            if($update_token_run){
                $subject="Password Reset";
                $body="Hi, click here to reset your password
                http://localhost/TimeTable/Frontend/reset_password.php?p=t&token=$token";
                $sender_email="From: uniroutinewizard@gmail.com";
                if(mail($email, $subject, $body, $sender_email)){
                    $mssg="Check your email to reset your password";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/teachersLoginPage.html';
                        </script>
                        ";
                }else{
                    echo "Email sending failed....";
                }
            }
            else{
                $_SESSION['status']="Something went wrong. #1";
                header("Location: password-reset.php");
                exit(0);
            }
        }
        else{
                    $mssg="No email found";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/recover_email.php?p=t';
                        </script>
                        ";
        }
    }elseif ($p=="s") {
        $check_email="SELECT * FROM student WHERE email='$email' LIMIT 1";
        $check_email_run= mysqli_query($conn, $check_email);

        if(mysqli_num_rows($check_email_run)>0){
            $update_token="UPDATE student SET login_token='$token' WHERE email='$email' LIMIT 1";
            $update_token_run= mysqli_query($conn, $update_token);

            if($update_token_run){
                $subject="Password Reset";
                $body="Hi, click here to reset your password
                http://localhost/TimeTable/Frontend/reset_password.php?p=s&token=$token";
                $sender_email="From: uniroutinewizard@gmail.com";
                if(mail($email, $subject, $body, $sender_email)){
                    $mssg="Check your email to reset your password";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/studentsLoginPage.html';
                        </script>
                        ";
                }else{
                    echo "Email sending failed....";
                }
            }
            else{
                $_SESSION['status']="Something went wrong. #1";
                header("Location: password-reset.php");
                exit(0);
            }
        }
        else{
                    $mssg="No email found";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/recover_email.php?p=s';
                        </script>
                        ";
        }
    }
}
?>