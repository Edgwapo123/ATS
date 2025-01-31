<?php 
include '../dbcon.php';
$today = date("Y-m-d");

$check = $con->query("SELECT * FROM `mark_attend` WHERE `user_id`='$liker' AND `post_id`='$post_id' ");
$cnrow =$check->num_rows;

if ($cnrow > 0) {
	$crow = $check->fetch_array();
	$pl_id = $crow[0];
	$sql = "DELETE FROM `mark_attend` WHERE `ma_id`='$pl_id'";
	$query = $con->query($sql);
	echo "1";
}else{
	$sql = "INSERT INTO `mark_attend`(`post_id`, `user_id`, `ma_date`, `ma_status`) 
	VALUES ('$post_id','$liker','$today','0')";
	$query = $con->query($sql);
	echo "0";
}
 ?>