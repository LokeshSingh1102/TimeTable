<?php
include("config.php");
$teacher = $_POST["Teacher"];
$newTeacher = $_POST["newTeacher"];
$subject = $_POST["Subject"];
$day = $_POST["Day"];
$period = $_POST["Period"];
// $dept = $_POST["Dept"];
// $semester = $_POST["Semester"];
// $section = $_POST["Section"];
$select = $_POST["select"];

// echo 'PHP version: ' . phpversion();
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
// echo date('d-m-Y H:i:s');
// echo $_SESSION["tempTime"];
$currdate = date('H:i:s');
$tempDate = date('H:i:s');
if($select=="temporary"){
    // echo " temporary ";
    $sel = "SELECT * FROM $day WHERE teacherName='$teacher' AND period = '$period'  ";

    $qr1 = mysqli_query($conn,$sel);
    $nr = mysqli_num_rows($qr1);
    if($nr){
        $sql = "UPDATE $day SET tempTeacher='$newTeacher', tempSubject='$subject' WHERE teacherName='$teacher' AND period = '$period' ";
        mysqli_query($conn, $sql);
        // $_SESSION["tempTime"] = date('H:i:s');
        setcookie("tempTime","12:00:00",strtotime('today 23:59'));
        echo "successful";
    }
    else{
        echo "not Found";
    }
}
else{
    // $sql = "UPDATE $day SET tempTeacher=Null, tempSubject=Null";
    // mysqli_query($conn, $sql);
    // echo "permanent";
    $sel = "SELECT * FROM $day WHERE teacherName='$teacher' AND period = '$period'  ";

    $qr1 = mysqli_query($conn,$sel);
    $nr = mysqli_num_rows($qr1);
    if($nr){
        // set the tempTeacher and tempSubject to null 
        $sql = "UPDATE $day SET tempTeacher=Null, tempSubject=Null WHERE teacherName='$teacher' AND period = '$period' ";
        mysqli_query($conn, $sql);

        // updating the teacher with newTeacher
        $sql = "UPDATE $day SET teacherName='$newTeacher', subject='$subject' WHERE teacherName='$teacher' AND period = '$period' ";
        mysqli_query($conn, $sql);
        // $_SESSION["tempTime"] = date('H:i:s');
        setcookie("tempTime","12:00:00",strtotime('today 23:59'));
        echo "successful";
    }
    else{
        echo "not Found";
    }

}
?>