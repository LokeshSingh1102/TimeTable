<?php
$conn = mysqli_connect("localhost", "root", "", "routine maker");

$teacher = $_POST['Teacher'];
$Subject = $_POST['Subject'];
$period = $_POST['Period'];
$Dept = $_POST['Dept'];
$Semester = $_POST['Semester'];
$Section = $_POST['Section'];
$day = $_POST['Day'];

$sql = "INSERT INTO $day (teacherName, subject , period, semester, section, dept) VALUES ('$teacher','$Subject','$period','$Semester','$Section','$Dept')";
mysqli_query($conn, $sql);
mysqli_close($conn);

?>