<?php
header('Content-Type: application/json');
include('config.php');
$teacher = $_POST['Teacher'];
$day = $_POST['Day'];

$sql = "SELECT * FROM `$day` where `teacherName`='$teacher'";
$result = mysqli_query($conn,$sql);
$nr=mysqli_num_rows($result);
$data = [];
$i=0;
if($nr){
    while($row = $result->fetch_assoc()){
        $arr = ["Subject"=>$row['subject'],"Semester"=>$row['semester'],"Department"=>$row['dept'], "Period"=>$row['period'],"Section"=>$row['section']];
        $data[$i] = $arr;
        $i = $i + 1;
    }
}
echo json_encode($data);
?>