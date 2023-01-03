<?php
include('config.php');
$sql = 'INSERT INTO check (
  teacherName, subject , class) VALUES ("skg", "Doe", 4)';

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>