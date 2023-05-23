<?php
include("config.php");
// echo 1;
if(isset($_POST['submit'])){
    // echo 2;
    if(isset($_GET['token'])){
        // echo 3;
    $token=$_GET['token'];
    $p=$_GET['p'];

    $newpassword= mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword= mysqli_real_escape_string($conn, $_POST['repassword']);

    if($newpassword===$cpassword){
        // echo 4;
        if($p=="t"){
            // echo 5;
            $updatequery="UPDATE teacher_data SET password='$newpassword' WHERE login_token='$token'";
            $iquery= mysqli_query($conn, $updatequery);
            if($iquery){
                // echo 6;
                $mssg="Your password has been updated";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/teachersLoginPage.html';
                        </script>
                        ";
            }else{
                // echo 7;
                $mssg="Your password is not updated";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/reset_password.php';
                        </script>
                        ";
            }
        }elseif($p=="s"){
            // echo 8;
            $updatequery="UPDATE student SET password='$newpassword' WHERE login_token='$token'";
            $iquery= mysqli_query($conn, $updatequery);
            if($iquery){
                // echo 9;
                $mssg="Your password has been updated";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/studentsLoginPage.html';
                        </script>
                        ";
            }else{
                // echo 10;
                $mssg="Your password is not updated";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/reset_password.php';
                        </script>
                        ";
        }

        }
    }else{
        // echo 11;
        $mssg="Password is not matching";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/reset_password.php';
                        </script>
                        ";
        }
    }else{
        // echo 12;
        $mssg="No token found";
                    echo "<script>
                        alert('".$mssg."');
                        window.location.href='../Frontend/reset_password.php';
                        </script>
                        ";
    }
}
?>