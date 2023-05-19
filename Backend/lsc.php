<?php
include("config.php");
//echo "<pre>";
//print_r($_POST);
$uid=$_POST["uid"];
$password=$_POST["password"];
$stream=$_POST["stream"];
$section=$_POST["section"];
$year=$_POST["year"];
$status=0;
$mssg="";

$sel="SELECT *FROM student WHERE uid='$uid'";
$qr1=mysqli_query($conn,$sel);
$nr=mysqli_num_rows($qr1);
if($nr){
	$row=mysqli_fetch_array($qr1);
	if(md5($row["password"])==md5($password)){
		$dttm=date("Y-m-d H:i:s");
		$token=md5(rand(0,9999));
		$_SESSION["login_token"]=$token;
		$_SESSION["login_status"]=true;
		$_SESSION["login_id"]=$row["uid"];

		$qry='';
		if(isset($_POST['remember']))
		{
			$remember_token=md5(rand(100000,999999999999).time());
			$exp_remember =time() + (86400*30);
			
			setcookie('remember_token', $remember_token, $exp_remember, "/"); // 86400 = 1 day
			$qry=",remember_token='$remember_token',exp_remember='$exp_remember'";
			//setcookie('exp_remember', $exp_remember, $exp_remember, "/"); // 86400 = 1 day
		}
		
		$updt="UPDATE student SET login_token='$token', login_dttm='$dttm' WHERE uid='$uid'";
		$qr2=mysqli_query($conn,$updt);
		$status=1;
		$mssg="Login Success";
	}
	else{
		$mssg="Incorrect Password";
	}
}
else{
	$mssg="Incorrect UID";
}

if($status==1){
	echo "
	<script>
	alert('".$mssg."');
	window.location.href='../Frontend/Students/studentIndex.php';
	</script>
	";
}
else{
	echo "
	<script>
	alert('".$mssg."');
	history.go(-1);
	</script>
	";
}
?>