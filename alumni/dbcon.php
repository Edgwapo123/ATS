<?php 
session_start();
$con = new mysqli("localhost", "root", "", "alumni");
$con -> set_charset("utf8");	
extract($_POST);
extract($_GET);
extract($_SESSION); 

function get_user_info($user_id){
	global $con;
	$sql ="SELECT * FROM `users` WHERE `user_id`='$user_id'";
	$query = $con->query($sql);
	$row = $query->fetch_array();
	return $row;
}
function checkLiked($post_id,$liker){
	global $con;
	$check = $con->query("SELECT * FROM `post_like` WHERE `user_id`='$liker' AND `post_id`='$post_id'");
	$cnrow =$check->num_rows;
	return $cnrow;
}
function get_active_page($view,$user_access){
	
	if ($user_access == 0) {
		$template = "template/admin.php";
		switch ($view) {
			case 'users':
		      $title = "User Management";
		      $content = "page_content/users.php";
		      $pageScript = "myscripts/users.js";
		    break;
		    case 'user_approval':
		      $title = "Users for Approval";
		      $content = "page_content/user_approval.php";
		      $pageScript = "myscripts/user_approval.js";
		    break;
		    case 'user_blocked':
		      $title = "Blocked Alumni's";
		      $content = "page_content/user_blocked.php";
		      $pageScript = "myscripts/user_blocked.js";
		    break;
		    case 'posts':
		      $title = "Post Management";
		      $content = "page_content/posts.php";
		      $pageScript = "myscripts/posts.js";
		    break;
			case 'newpost':
		      $title = "New Post";
		      $content = "page_content/newpost.php";
		      $pageScript = "myscripts/newpost.js";
		    break;
		    case 'edit_post':
		      $title = "Edit Post";
		      $content = "page_content/edit_post.php";
		      $pageScript = "myscripts/edit_post.js";
		    break;
		    case 'view_post':
		      $title = "View Post";
		      $content = "page_content/view_post.php";
		      $pageScript = "myscripts/view_post.js";
		    break;
		    case 'alumni_list':
		      $title = "Alumni List";
		      $content = "page_content/alumni_list.php";
		      $pageScript = "myscripts/alumni_list.js";
		    break;
			default:
				$title = "Administrators Dashboard";
				$content = "page_content/dashboard.php";
				$pageScript = "myscripts/dashbaord.js";
				break;
		}
	}else{
		$template = "template/alumni.php";
		switch ($view) {
			case 'users':
		      $title = "User Management";
		      $content = "page_content/users.php";
		    break;
			case 'value':
						$title = "Administrators Dashboard";
				 		$content = "page_content/dashboard.php";
						$pageScript = "myscripts/dashbaord.js";
						break;
					case 'events':
						$title = "Events Posts";
				 		$content = "page_content/events.php";
						$pageScript = "myscripts/events.js";
						break;
					case 'jobpost':
						$title = "Job Opportunity";
				 		$content = "page_content/jobpost.php";
						$pageScript = "myscripts/jobpost.js";
						break;
					case 'trainings':
						$title = "Trainings";
				 		$content = "page_content/trainings.php";
						$pageScript = "myscripts/trainings.js";
						break;
					case 'single_post':
						$title = "Post Details";
				 		$content = "page_content/single_post.php";
						$pageScript = "myscripts/single_post.js";
						break;	
					case 'donations':
						$title = "Donations";
				 		$content = "page_content/donations.php";
						$pageScript = "myscripts/donations.js";
						break;			
					case 'profile':
						$title = "Your Profile";
				 		$content = "page_content/profile.php";
						$pageScript = "myscripts/profile.js";
						break;	
			default:
				$title = "Home Page";
		 		$content = "page_content/homepage.php";
				$pageScript = "myscripts/homepage.js";
				break;
		}

	}

	return $template.'|'.$content.'|'.$pageScript.'|'.$title;
}
function get_alumni(){
	global $con;
	$sql = "SELECT * FROM `users` WHERE `user_access`=1 ";
	$query = $con->query($sql);
}

function get_alumni_information($userid){
	global $con;
	$sql = "SELECT * FROM `users` WHERE `user_id`='$userid' ";
	$query = $con->query($sql);
	$row = $query->fetch_array();
	return $row;

}

function getUsername($userid){
	global $con;
	$sql = "SELECT * FROM `chat_message` WHERE `user_id`='$user_id'";
	$query = $con->query($sql);
	$row = $query->fetch_array();
	return $row;
}

function getUserImage($user_id){
	global $con;
	$sql = "SELECT `user_id`, `user_img` FROM `users` WHERE `user_id`='$user_id'";
	$query =$con->query($sql);
	$row = $query->fetch_array();
	if (empty($row['user_img'])) {
		return 'default.jpg';
	}else{
		return $row['user_img'];
	}
}
function getAlumniName($user_id){
	global $con;
	$sql = "SELECT `user_id`, `fname`,`lname` FROM `users` WHERE `user_id`='$user_id'";
	$query =$con->query($sql);
	$row = $query->fetch_array();
	return $row['fname'].' '.$row['lname'];
}


function formatDateTime($inputDateTime) {
    // Create DateTime objects for the input and the current time
    $inputDate = new DateTime($inputDateTime);
    $currentDate = new DateTime();
    
    // Get the current date and time in the desired format
    $currentDateFormatted = $currentDate->format('Y-m-d H:i:s');
    
    // Check if the input date is today
    if ($inputDate->format('Y-m-d') === $currentDate->format('Y-m-d')) {
        return "Today at " . $inputDate->format('h:i a');
    }

    // Check if the input date is yesterday
    $yesterday = clone $currentDate; // Clone the current date
    $yesterday->modify('-1 day'); // Modify the cloned date to be yesterday

    if ($inputDate->format('Y-m-d') === $yesterday->format('Y-m-d')) {
        return "Yesterday at " . $inputDate->format('h:i a');
    }

    // Check if the input date is within the past week
    $oneWeekAgo = clone $currentDate; // Clone the current date
    $oneWeekAgo->modify('-7 days'); // Modify to one week ago

    if ($inputDate >= $oneWeekAgo && $inputDate < $currentDate) {
        return $inputDate->format('l') . " at " . $inputDate->format('H:i');
    }

    // For any other date, return a default format (optional)
    return $inputDate->format('F d, Y - h:i a');
}

function getLikeCount($post_id){
	global $con;

	$sql  ="SELECT `pl_id`, `post_id` FROM `post_like` WHERE `post_id`='$post_id'";
	$query = $con->query($sql);
	$nrow = $query->num_rows;
	return $nrow;
}

function gettotalComment($post_id){
	global $con;
	$sql  ="SELECT `post_id` FROM `post_comment` WHERE `post_id`='$post_id'";
	$query = $con->query($sql);
	$nrow = $query->num_rows;
	return $nrow;

}

function checkAttendance($user_id,$post_id){
	global $con;
	$sql  ="SELECT * FROM `mark_attend` WHERE `post_id`='$post_id' AND `user_id`='$user_id'";
	$query = $con->query($sql);
	$nrow = $query->num_rows;
	return $nrow;
}

function getPostContent($post_id){
	global $con;

	$sql = "SELECT * FROM `post` WHERE `post_id`='$post_id'";
	$query = $con->query($sql);
	$row = $query->fetch_array();
	return $row;
}

function getAttendies($post_id){
	global $con;

	$sql = "SELECT count(`ma_id`) as total_att, `post_id` FROM `mark_attend` WHERE `post_id`='$post_id'";
	$query = $con->query($sql);
	$row = $query->fetch_array();
	return $row['total_att'];
}

function getActiveAlumni(){
	global $con;

	$count_sql = "SELECT COUNT(*) AS total FROM users WHERE `user_status`=1 AND `user_access` = 1 ";
	$count_result = $con->query($count_sql);
	$total_rows = $count_result->fetch_assoc()['total'];
	return $total_rows;

}

function getForApprovalAlumni(){
	global $con;

	$count_sql = "SELECT COUNT(*) AS total FROM users WHERE `user_status`=0 AND `user_access` = 1 ";
	$count_result = $con->query($count_sql);
	$total_rows = $count_result->fetch_assoc()['total'];
	return $total_rows;

}

function getTotalPosts($post_category){
	global $con;

	$count_sql = "SELECT COUNT(*) AS total FROM `post` WHERE `post_status`=1 AND `post_category`='$post_category' ";
	$count_result = $con->query($count_sql);
	$total_rows = $count_result->fetch_assoc()['total'];
	return $total_rows;
}


function Update_postView($post_id){
	global $con;

	$check = $con->query("SELECT * FROM `post` WHERE `post_id`='$post_id'");
	$row = $check->fetch_array();
	$postviewcount = $row['post_view'];
	$newpv = $postviewcount + 1;
	$sql = "UPDATE `post` SET `post_view`='$newpv' WHERE `post_id`='$post_id'";
	$query = $con->query($sql);
}

function calculateAverageViews() {
    global $con; // Use the global connection

    // Query to get total post views and post count
    $sql = "SELECT SUM(`post_view`) AS total_views, COUNT(*) AS total_posts FROM post";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        
        $total_views = $data['total_views'];
        $total_posts = $data['total_posts'];
        
        // Check to avoid division by zero
        if ($total_posts > 0) {
            $average_views = $total_views / $total_posts;
        } else {
            $average_views = 0; // No posts in the table
        }
        
        return number_format($average_views,2);
    } else {
        // Handle query error
        die("Query failed: " . mysqli_error($con));
    }
}

function calculateAverageLikes() {
    global $con;

    // Query to get total likes and post count
    $sql = "SELECT COUNT(`pl_id`) AS total_likes, COUNT(DISTINCT `post`.`post_id`) AS total_posts 
            FROM `post` 
            LEFT JOIN `post_like` ON `post`.`post_id` = `post_like`.`post_id`";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        
        $total_likes = $data['total_likes'];
        $total_posts = $data['total_posts'];
        
        // Check to avoid division by zero
        if ($total_posts > 0) {
            $average_likes = $total_likes / $total_posts;
        } else {
            $average_likes = 0; // No posts in the table
        }
        
        return number_format($average_likes,2);
    } else {
        // Handle query error
        die("Query failed: " . mysqli_error($con));
    }
}

function calculateAverageComments() {
    global $con;

    // Query to get total likes and post count
    $sql = "SELECT COUNT(`comment_id`) AS total_likes, COUNT(DISTINCT `post`.`post_id`) AS total_posts 
            FROM `post` 
            LEFT JOIN `post_comment` ON `post`.`post_id` = `post_comment`.`post_id`";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        
        $total_likes = $data['total_likes'];
        $total_posts = $data['total_posts'];
        
        // Check to avoid division by zero
        if ($total_posts > 0) {
            $average_likes = $total_likes / $total_posts;
        } else {
            $average_likes = 0; // No posts in the table
        }
        
        return number_format($average_likes,2);
    } else {
        // Handle query error
        die("Query failed: " . mysqli_error($con));
    }
}

function getAttendie($post_id){
	global $con;
	$sql = "SELECT * FROM `mark_attend` LEFT JOIN `users` ON users.user_id=mark_attend.user_id WHERE `post_id`='$post_id'";
	$query = $con->query($sql);
	return $query;
}


?>