<?php
include('config.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
$name=$_POST['username'];
$profession=$_POST['profession'];
$email=$_POST['email'];
$password=$_POST['password'];
// $department=$_POST['department'];
$dttm=date('Y-m-d H:i:s');

$status=0;
$mssg="";

if($profession=="Teacher"){
        $sqll="SELECT id FROM teacher_data where email='$email'";
        $qr1=mysqli_query($conn,$sqll) or die(mysqli_error($conn));
        $noc=mysqli_num_rows($qr1);
        //email  Already Used Or Not Checking
        if(!$noc){
            
                    
                    $uid = abs( crc32( uniqid() ) ); //1551585806
                    //Insert data
                    $sql= "INSERT INTO teacher_data (name,email,signup_dttm,uid,password)
                    VALUES ('$name', '$email', '$dttm','$uid','$password')";
                    $qrr=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                    if($qrr){
                        $status=1;
		                $mssg="Sign-up Successful";
                    }else{
                        $mssg="Sign-up Unsuccessful";
                    }
                }else
                {
                    $mssg='email already exists';
                }
            }else{
                $sqll="SELECT id FROM student where email='$email'";
                $qr1=mysqli_query($conn,$sqll) or die(mysqli_error($conn));
                $noc=mysqli_num_rows($qr1);
                //email  Already Used Or Not Checking
                if(!$noc){
                    
                            
                            $uid = abs( crc32( uniqid() ) ); //1551585806
                            //Insert data
                            $sql= "INSERT INTO student (name,email,department,signup_dttm,uid,password)
                            VALUES ('$name', '$email', '$department', '$dttm','$uid','$password')";
                            $qrr=mysqli_query($conn,$sql) or die(mysqli_error($conn));
                            if($qrr){
                                $status=2;
        		                $mssg="Sign-up Successful";
                            }else{
                                $mssg="Sign-up Unsuccessful";
                            }
                        }else
                        {
                            $mssg='email already exists';
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