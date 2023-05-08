<?php
$conn = mysqli_connect("localhost", "root", "", "routine maker");


$teacher = $_POST['Teacher'];
$Subject = $_POST['Subject'];
$Class = $_POST['Classes'];
$Dept = $_POST['Dept'];
$Semester = $_POST['Semester'];
$Section = $_POST['Section'];
echo $teacher, $Subject, $Class;

$sql = "INSERT INTO teacher (teacherName, subject , class, dept, semester, section) VALUES ('$teacher','$Subject','$Class','$Dept','$Semester','$Section')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>