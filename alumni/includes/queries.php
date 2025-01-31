<?php 
include '../dbcon.php';
if (isset($submit_login)) {	

		$user_pass = mysqli_escape_string($con,$password);
		// $newpass = md5($solx_password);
		$check = "SELECT * FROM `users` WHERE `user_email`='$email' AND `password`='$user_pass' AND `user_status`=1  ";
			$checkq = $con->query($check);
		   $nrow = $checkq->num_rows;
			$row = $checkq->fetch_array();
			if ($nrow > 0) { 
			$_SESSION['user_id'] = $row['user_id'];
				echo "1";
			}else{
				echo "0"; 
			}
 
	}

if (isset($logoutnow)) {

			session_destroy();

	}

if (isset($register_alumni)) {

	    // Check if a profile picture is uploaded
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $target_dir = "../uploads/";  // Directory for profile pictures
        $profile_name = basename($_FILES["profile_picture"]["name"]);
        $target_file = $target_dir . $profile_name;

        // Optional: Validate file type and size here (e.g., check file extension, size limit)

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // File uploaded successfully
        } else {
            echo "Error uploading profile picture.";
            exit;
        }
    }
	
	$sql = "INSERT IGNORE INTO `users`(`user_email`, `password`, `fname`, `mname`, `lname`, `contact`, `address`, `birthday`, `gender`, `current_emp`, `position_emp`, `year_len_emp`, `high_education`, `year_len_edu`, `award_education`, `user_access`,`batch_year`,`user_img`,`mar_status`) 
	VALUES ('$user_email','$password','$gname','$mname','$lname','$contact','$address','$bdate','$gender','$emp_company','$emp_position','$emp_year','$hea','$hea_year','$hea_award','1','$batchyear','$profile_name','$mar_status')";
	$query = $con->query($sql);

	if ($query) {
		echo "1";
	}else{
		echo "0";
	}
}

if (isset($_POST['edit_profile'])) {
    $profile_name = '';

    // Check if a profile picture is uploaded
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $target_dir = "../uploads/";  // Directory for profile pictures
        $profile_name = basename($_FILES["profile_picture"]["name"]);
        $target_file = $target_dir . $profile_name;

        // Optional: Validate file type and size here (e.g., check file extension, size limit)

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // File uploaded successfully
        } else {
            echo "Error uploading profile picture.";
            exit;
        }
    }

    // SQL query to update user details
    $sql = "UPDATE `users` SET 
            `user_email`='$user_email',
            `fname`='$gname',
            `mname`='$mname',
            `lname`='$lname',
            `contact`='$contact',
            `address`='$address',
            `birthday`='$bdate',
            `gender`='$gender',
            `current_emp`='$emp_company',
            `position_emp`='$emp_position',
            `year_len_emp`='$emp_year',
            `high_education`='$hea',
            `year_len_edu`='$hea_year',
            `award_education`='$hea_award',
            `batch_year`='$batchyear',
            `mar_status`='$mar_status'
            ";

    // Update password if provided
    if (!empty($password)) {
        $sql .= ", `password`='$password'";
    }

    // Update user_img if a new profile picture is uploaded
    if (!empty($profile_name)) {
        $sql .= ", `user_img`='$profile_name'";
    }

    $sql .= " WHERE `user_id`='$userid'";

    // Execute the query
    $query = $con->query($sql);

    if ($query) {
        echo "1";
    } else {
        echo "0";
    }
}


if (isset($new_post)) {
    $today = date("Y-m-d h:i:sa");

    // Set the post date based on post status
    if ($post_status > 0) {
        $post_date = $today;
    } else {
        $post_date = "0000-00-00";
    }

    // File upload handling
    if (isset($_FILES['post_image'])) {
        $file_name = $_FILES['post_image']['name'];
        $file_tmp = $_FILES['post_image']['tmp_name'];
        $file_error = $_FILES['post_image']['error'];
        $file_type = $_FILES['post_image']['type']; // File MIME type
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // File extension

        // Allowed file extensions
        $allowed_exts = ['webp', 'jpg', 'jpeg', 'png'];
        $allowed_mime_types = ['image/webp', 'image/jpeg', 'image/png'];

        if ($file_error === UPLOAD_ERR_OK) {
            // Validate file extension and MIME type
            if (in_array($file_ext, $allowed_exts) && in_array($file_type, $allowed_mime_types)) {
                // Specify upload directory
                $upload_dir = '../uploads/';

                // Ensure upload directory exists
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }

                // Generate a unique file name to prevent overwriting
                $unique_file_name = uniqid() . '.' . $file_ext;
                $file_path = $upload_dir . $unique_file_name;

                move_uploaded_file($file_tmp, $file_path);
            } 
        }
    } 
	$post_content = mysqli_real_escape_string($con,$post_content);
    if (isset($event_date)) {
        $newdate = date("Y-m-d H:i", strtotime($event_date.' '.$event_time));
        $sql = "INSERT IGNORE INTO `post` (`post_date`, `post_title`, `post_content`, `post_img`, `post_category`, `post_status`, `last_updated`,`date_event`) 
            VALUES ('$post_date', '$post_title', '$post_content', '$unique_file_name', '$post_category', '$post_status', '$today','$newdate')";
    }else{
        $sql = "INSERT IGNORE INTO `post` (`post_date`, `post_title`, `post_content`, `post_img`, `post_category`, `post_status`, `last_updated`) 
            VALUES ('$post_date', '$post_title', '$post_content', '$unique_file_name', '$post_category', '$post_status', '$today')";
    }
    // Insert the post data into the database

    $query = $con->query($sql);

    if ($query) {
        echo "1"; // Success response
    } else {
        echo "0"; // Error response
    }
}

if (isset($_POST['edit_post'])) {

    $today = date("Y-m-d h:i:sa");

    // Set the post date based on post status
    if ($post_status > 0) {
        $post_date = $today;
    } else {
        $post_date = "0000-00-00";
    }

    // Initialize variable for the unique file name
    $unique_file_name = '';

    // Check if a post image is uploaded
    if (isset($_FILES['post_image']) && $_FILES['post_image']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['post_image']['name'];
        $file_tmp = $_FILES['post_image']['tmp_name'];
        $file_type = $_FILES['post_image']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Get file extension

        // Allowed file extensions and MIME types
        $allowed_exts = ['webp', 'jpg', 'jpeg', 'png', 'jfif'];
        $allowed_mime_types = ['image/webp', 'image/jpeg', 'image/png'];

        // Validate the uploaded file
        if (in_array($file_ext, $allowed_exts) && in_array($file_type, $allowed_mime_types)) {
            // Specify the upload directory
            $upload_dir = '../uploads/';

            // Ensure the upload directory exists
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Generate a unique file name to prevent overwriting
            $unique_file_name = uniqid() . '.' . $file_ext;
            $file_path = $upload_dir . $unique_file_name;

            // Move the uploaded file to the destination directory
            if (!move_uploaded_file($file_tmp, $file_path)) {
                echo "Error moving uploaded file.";
                exit;
            }
        }
    }

    // Build the SQL query for updating the post
    $sql = "UPDATE `post` SET 
                `post_date` = '$post_date',
                `post_title` = '$post_title',
                `post_content` = '$post_content',
                `post_category` = '$post_category',
                `post_status` = '$post_status',
                `last_updated` = '$today'";

    // If a new image was uploaded, include it in the update
    if (!empty($unique_file_name)) {
        $sql .= ", `post_img` = '$unique_file_name'";
    }
     if (isset($event_date)) {
        $newdate = date("Y-m-d H:i", strtotime($event_date.' '.$event_time));
        $sql.= " ,`date_event`='$newdate'";
    }

    $sql .= " WHERE `post_id` = '$post_id'";

    // Execute the query
    $query = $con->query($sql);

    // Return the result
    if ($query) {
        echo "1"; // Success response
    } else {
        echo "0"; // Error response
    }
}



if (isset($send_message)) {
	$today = date("Y-m-d h:i:sa");
	$sql = "INSERT IGNORE INTO `chat_message`(`sender_id`, `receiver_id`, `chat_message`, `chat_date`, `chat_status`) 
	VALUES ('$user_id','$receiver','$chatmessage','$today','0')";
	$query = $con->query($sql);
	if ($query) {
		echo '<div class="direct-chat-msg m-4 right">';
		echo '<div class="direct-chat-infos clearfix">';
		echo '<span class="direct-chat-timestamp float-right">'.$today.'</span> </div>';
		echo '<img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <div class="direct-chat-text bg-info">';
        echo $chatmessage;
		echo '</div></div>';
	}else{
		echo "0";
	}
}


if (isset($delete_post)) {
    
    $sql ="DELETE FROM `post` WHERE `post_id`='$post_id'";
    $sql1 = "DELETE FROM `post_like` WHERE `post_id`='$post_id'";
    $sql2 = "DELETE FROM `mark_attend` WHERE `post_id`='$post_id'";
    $sql3 ="DELETE FROM `post_comment` WHERE `post_id`='$post_id'";
    $query = $con->query($sql);
    $query1 = $con->query($sql1);
    $query2 = $con->query($sql2);
    $query3 = $con->query($sql3);
    
    if ($query) {
      echo "1";
    }else{
        echo "0";
    }
}

if (isset($account_settings)) {
    $sql = "UPDATE `users` SET `user_email`='$user_email',`password`='$password',`fname`='$fname',`mname`='$mname',`lname`='$lname' WHERE `user_id`='$userid'";
    $query = $con->query($sql);
    if ($query) {
       echo "1";
    }else{
        echo "0";
    }
}



 ?>