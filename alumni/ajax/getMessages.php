<?php 
include '../dbcon.php';
$today = date("Y-m-d h:i:sa");
	$sql = "SELECT * FROM `chat_message` WHERE `sender_id`='$chatmate' AND `receiver_id`='$user_id' and `chat_status`=0 ";
	$query = $con->query($sql);
	$numrow = $query->num_rows;
	if ($numrow > 0) {
		while ($row = $query->fetch_array()) {
		echo '<div class="direct-chat-msg m-4 left">';
		echo '<div class="direct-chat-infos clearfix">';
		echo '<span class="direct-chat-timestamp float-left">'.$row['chat_date'].'</span> </div>';
		echo '<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <div class="direct-chat-text">';
        echo $row['chat_message'];
		echo '</div></div>||'.$numrow;
		}
		$update = $con->query("UPDATE `chat_message` SET `chat_status`=1 WHERE `sender_id`='$chatmate' AND `receiver_id`='$user_id' and `chat_status`=0");
	}

 ?>