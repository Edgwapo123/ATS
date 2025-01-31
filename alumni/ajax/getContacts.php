<?php 
include '../dbcon.php';
$sql ="SELECT * FROM `users` WHERE `user_id`!='$user_id' AND `user_status`=1 ";
if (!empty($search)) {
    $sql.=" AND `user_id`='$search'";
}
$query = $con->query($sql);
while ($row = $query->fetch_array()) {
?>
<li id="chatid<?php echo $row['user_id'] ?>" class="getChatDM" data-chat_mate="<?php echo $row['user_id'] ?>">
	<img src="<?php echo (!empty($row['user_img'])) ? 'uploads/'.$row['user_img'] : 'images/default.jpg' ?>" alt="John Doe" class="user-img ">
	<span><?php echo $row['fname'].' '.$row['mname'].' '.$row['lname'] ?> <br><small><?php echo (!empty($row['batch_year']))? 'Batch '.$row['batch_year']: 'Administrator' ?></small></span>
</li>
<?php
}
 ?>