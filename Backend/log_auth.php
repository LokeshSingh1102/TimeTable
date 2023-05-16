<?php
// echo "<pre>";
// print_r($_SESSION);
if(isset($_SESSION['login_status']) && $_SESSION['login_status']==true)
{
	$id = $_SESSION['login_id'];
	$login_token=$_SESSION['login_token'];
	$sqlt="SELECT * FROM teacher_data WHERE id='$id' AND login_token='$login_token'";
	$sqls="SELECT * FROM student WHERE id='$id' AND login_token='$login_token'";
	
	$qrt=mysqli_query($conn,$sqlt) or die(mysqli_error($conn));
	$qrs=mysqli_query($conn,$sqls) or die(mysqli_error($conn));

	$noc_t=mysqli_num_rows($qrt);
	$noc_s=mysqli_num_rows($qrs);

		if($noc_t){
			$row=mysqli_fetch_array($qrt);
		}elseif($noc_s){
			$row=mysqli_fetch_array($qrs);
		}//else
		// {
		// 	// echo "in";
		// 	header("Location: logout.php");
		// 	exit;
		// }
	
}else
{
	// echo "out";
	header("Location: logout.php");
	exit;
}
?>