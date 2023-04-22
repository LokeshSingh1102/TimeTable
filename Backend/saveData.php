<?php
$conn = mysqli_connect("localhost", "root", "", "routine maker");

$teacher = $_POST['Teacher'];
$Subject = $_POST['Subject'];
$period = $_POST['Period'];
$Semester = $_POST['Semester'];
$Section = $_POST['Section'];
$day = $_POST['Day'];
// echo $teacher, $Subject, $Class;

$sql = "INSERT INTO $day (teacherName, subject , period, semester, section) VALUES ('$teacher','$Subject','$period','$Semester','$Section')";
mysqli_query($conn, $sql);
mysqli_close($conn);

?>