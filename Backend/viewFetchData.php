<?php
header('Content-Type: application/json');
include('config.php');
$dept = $_POST['Dept'];
$sem = $_POST['Semester'];
$sec = $_POST['Section'];
$day = $_POST['Day'];

$sql = "SELECT * FROM `$day` where `dept`='$dept' AND `semester`='$sem' AND `section`='$sec'";
$result = mysqli_query($conn,$sql);
$nr=mysqli_num_rows($result);
$data = [];
$i=0;
if($nr){
    while($row = $result->fetch_assoc()){
        $arr = ["Subject"=>$row['subject'], "Period"=>$row['period']];
        $data[$i] = $arr;
        $i = $i + 1;
    }
}
echo json_encode($data);
?>