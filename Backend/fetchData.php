<?php
include('config.php');

$sel="SELECT * FROM teacher";
$qr1=mysqli_query($conn,$sel);
$nr=mysqli_num_rows($qr1);
$data = [];
$i=0;
if($nr){
	while($row = $qr1->fetch_assoc()){
        $arr = ["Teacher"=> $row["teacherName"],"Subject"=>$row["subject"],"Classes"=>$row["class"]];

        $data[$i] = $arr;
        // print_r($data[$i]);
        // echo "\n";
        $i = $i + 1;
        // echo " ".$arr["Teacher"]."\n";
    }
}


echo json_encode($data);

?>