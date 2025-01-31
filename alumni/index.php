<?php
include 'dbcon.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
if (isset($user_id)) {
	$auser = get_user_info($user_id);
	$active_page = get_active_page($view,$auser['user_access']);
	$page = explode('|', $active_page);
	$template = $page[0];
	$content = $page[1];
	$pageScript = $page[2];
	$title = $page[3];
}else{
	if (isset($register) || isset($login)) {
		if (isset($register)) {
				$template = "template/register.php";
			}
			if (isset($login)) {
				$template = "template/login.php";
			} 
	}else{
				$template = "template/alumni.php";
				switch ($view) {
					case 'value':
						$title = "Administrators Dashboard";
				 		$content = "page_content/dashboard.php";
						$pageScript = "myscripts/dashbaord.js";
						break;
					case 'events':
						$title = "&nbsp";
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
					case 'donations':
						$title = "Donations";
				 		$content = "page_content/donations.php";
						$pageScript = "myscripts/donations.js";
						break;			
					default:
						$title = "Home Page";
				 		$content = "page_content/homepage.php";
						$pageScript = "myscripts/homepage.js";
						break;
				}
	}
}
require_once($template);
?>