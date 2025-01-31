<?php 
include '../dbcon.php';

$sql = "UPDATE `users` SET `user_status`=3 WHERE `user_id`='$userid'";
$query = $con->query($sql);
if ($query) {
	echo "1";
}else{
	echo "0";
}


 ?>