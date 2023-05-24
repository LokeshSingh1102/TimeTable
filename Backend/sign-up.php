<?php
include('config.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// $name=$_POST['username'];
$uid=$_POST['uid'];
$profession=$_POST['profession'];
$email=$_POST['email'];
$password=$_POST['password'];
// $department=$_POST['department'];
$dttm=date('Y-m-d H:i:s');

$status=0;
$mssg="";

if($profession=="Teacher" or $profession=="teacher"){
        $sqle="SELECT id FROM teacher_data where email='$email'";
        $qre=mysqli_query($conn,$sqle) or die(mysqli_error($conn));
        $noce=mysqli_num_rows($qre);
        //email  Already Used Or Not Checking

        $sqlu="SELECT id FROM teacher_data where uid='$uid'";
        $qru=mysqli_query($conn,$sqlu) or die(mysqli_error($conn));
        $nocu=mysqli_num_rows($qru);
        //uid  Already Used Or Not Checking
        if($noce==0 and $nocu==0){
            
                    
                    // $uid = abs( crc32( uniqid() ) ); //1551585806
                    $token=md5(rand(0,9999));
                    //Insert data
                    
                    $sql= "INSERT INTO `teacher_data` (`email`,`signup_dttm`,`uid`,`password`,`login_token`,`login_dttm`)
                    VALUES ('$email', '$dttm','$uid','$password','$token','$dttm')";
                    $qrr=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                    
                    if($qrr){
                		$_SESSION["login_token"]=$token;
                        $_SESSION["login_status"]=true;
                        $_SESSION["login_id"]=$uid;
                        $status=1;
		                $mssg="Sign-up Successful";
                    }else{
                        $mssg="Sign-up Unsuccessful";
                    }
                }else
                {
                    if($noce!=0){
                        $mssg='Email already exists';
                    }
                    else{
                        $mssg='Account already exists';
                    }
                }
            }else{
                $sqle="SELECT id FROM student where email='$email'";
                $qre=mysqli_query($conn,$sqle) or die(mysqli_error($conn));
                $noce=mysqli_num_rows($qre);
                //email  Already Used Or Not Checking

                $sqlu="SELECT id FROM student where uid='$uid'";
                $qru=mysqli_query($conn,$sqlu) or die(mysqli_error($conn));
                $nocu=mysqli_num_rows($qru);
                //uid  Already Used Or Not Checking
                if($noce==0 and $nocu==0){
                    
                            
                            // $uid = abs( crc32( uniqid() ) ); //1551585806
                            $token=md5(rand(0,9999));
                            //Insert data
                            $sql= "INSERT INTO `student` (`email`,`signup_dttm`,`password`,`login_token`,`login_dttm`)
                            VALUES ('$email', '$dttm','$password','$token','$dttm')";
                            $qrr=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                            if($qrr){
                                $_SESSION["login_token"]=$token;
                                $_SESSION["login_status"]=true;
                                $_SESSION["login_id"]=$uid;
                                $status=2;
        		                $mssg="Sign-up Successful";
                            }else{
                                $mssg="Sign-up Unsuccessful";
                            }
                        }else
                        {
                            if($noce!=0){
                                $mssg='Email already exists';
                            }
                            else{
                                $mssg='Account already exists';
                            }
                        }
            }
        

if($status==1){
    echo "
    <script>
    alert('".$mssg."');
    window.location.href='../Frontend/Teachers/teacherIndex.html';
    </script>
    ";
}elseif($status==2){
    echo "
    <script>
    alert('".$mssg."');
    window.location.href='../Frontend/Students/studentIndex.html';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('".$mssg."');
    history.go(-1);
    </script>
    ";
}
?>