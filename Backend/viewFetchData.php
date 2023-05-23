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
// if($nr){
//     while($row = $result->fetch_assoc()){
//         $arr = ["Subject"=>$row['subject'], "Period"=>$row['period']];
//         $data[$i] = $arr;
//         $i = $i + 1;
//     }
// }
if($nr){
    if(isset($_COOKIE["tempTime"])){
        while($row = $result->fetch_assoc()){
            if($row['tempTeacher']==""){
                $arr = ["Subject"=>$row['subject'],"Semester"=>$row['semester'],"Department"=>$row['dept'], "Period"=>$row['period'],"Section"=>$row['section']];
                $data[$i] = $arr;
            }
            else{
                $arr = ["Subject"=>$row['tempSubject'],"Semester"=>$row['semester'],"Department"=>$row['dept'], "Period"=>$row['period'],"Section"=>$row['section']];
                $data[$i] = $arr;  
            }
            $i = $i + 1;
        }
    }
    else{
        $sql = "UPDATE $day SET tempTeacher=Null, tempSubject=Null";
        mysqli_query($conn, $sql);
            while($row = $result->fetch_assoc()){
                $arr = ["Subject"=>$row['subject'],"Semester"=>$row['semester'],"Department"=>$row['dept'], "Period"=>$row['period'],"Section"=>$row['section']];
                $data[$i] = $arr;
                $i = $i + 1;
            }        
    }
}

echo json_encode($data);
?>