<?php 
include '../dbcon.php';
$today = date("Y-m-d");

$check = $con->query("SELECT * FROM `post_like` WHERE `user_id`='$liker' AND `post_id`='$post_id'");
$cnrow =$check->num_rows;

if ($cnrow > 0) {
	$crow = $check->fetch_array();
	$pl_id = $crow[0];
	$sql = "DELETE FROM `post_like` WHERE `pl_id`='$pl_id'";
	$query = $con->query($sql);
	echo "1";
}else{
	$sql = "INSERT INTO `post_like`(`user_id`, `post_id`, `pl_date`, `pl_status`) VALUES ('$liker','$post_id','$today','0')";
	$query = $con->query($sql);
	echo "0";
}
 ?>