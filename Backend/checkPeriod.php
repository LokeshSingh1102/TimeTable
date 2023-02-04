<?php
include('config.php');

$sel = "SELECT * FROM teachers where teacherName = 'lokesh' ";
$qr1 = mysqli_query($conn,$sel);
$nr = mysqli_num_rows($qr1);
$data = [];
$i=0;
if($nr){
    while($row = $qr1->fetch_assoc()){
        $arr = ["teacherName" => $row["teacherName"],"subject" => $row["subject"], "period" => $row["period"]];
        $data[$i] = $arr;
        // print_r($data[$i]);
        // echo " \n";
        $i = $i + 1;

    }
}
echo json_encode($data);
?>