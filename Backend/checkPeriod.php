<?php
include('config.php');

$teacher = $_POST['Teacher'];
$day = $_POST['Day'];
$period = $_POST['Period'];

$data = [];

$sel = "SELECT * FROM $day where teacherName = '$teacher' AND period = '$period' ";
$qr1 = mysqli_query($conn,$sel);
$nr = mysqli_num_rows($qr1);

if($nr){
    $data[0] = true;
    echo json_encode(true);
}
else{
    $data[0] = false;
    echo json_encode(false);
}

// $sel = "SELECT * FROM teachers where teacherName = 'lokesh' ";
// $qr1 = mysqli_query($conn,$sel);
// $nr = mysqli_num_rows($qr1);
// $data = [];
// $i=0;
// if($nr){
//     while($row = $qr1->fetch_assoc()){
//         $arr = ["teacherName" => $row["teacherName"], "subject" => $row["subject"], "period" => $row["period"]];
//         $data[$i] = $arr;
//         // print_r($data[$i]);
//         // echo " \n";
//         $i = $i + 1;
//     }
// }
// echo json_encode($data);

?>