<?php
$conn = mysqli_connect("localhost", "root", "", "routine maker");


$teacher = $_POST['Teacher'];
$Subject = $_POST['Subject'];
$Class = $_POST['Classes'];
$Semester = $_POST['Semester'];
$Section = $_POST['Section'];
echo $teacher, $Subject, $Class;

$sql = "INSERT INTO teacher (teacherName, subject , class) VALUES ('$teacher','$Subject','$Class')";
mysqli_query($conn, $sql);

// $arr = $_POST['values'];

// $data =isset($_POST['values'])? json_decode($_POST['values']):'';
// echo $data.'hello';
// if (isset($_POST['values'])){
//     $data = json_decode($_POST['values']);
// }
// foreach($data as $k=>$v) {
//     foreach ($v as $key => $value) {
//         $teacher = $key==='Teacher'?$value:'';
//         $Subject = $key==='Subject'?$value:'';
//         $Class = $key==='Classes'?$value:'';
//         $Semester = $key==='Semester'?$value:'';
//         $Section = $key==='Section'?$value:'';
//     }
//     $sql = "INSERT INTO teacher (teacherName, subject , class) VALUES ('$teacher','$Subject','$Class')";
//     mysqli_query($conn, $sql);
// }
// echo $teacher, $Subject, $Class;

mysqli_close($conn);

?>