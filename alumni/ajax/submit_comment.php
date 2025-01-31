<?php 
include '../dbcon.php';
$today = date("Y-m-d H:i");
$sql = "INSERT INTO `post_comment`(`post_id`, `alumni_id`, `comment`, `comment_date`, `comment_status`) 
VALUES ('$post_id','$alumni_id','$comment','$today','0')";
$query = $con->query($sql);
if ($query) {
?>

<div class="card-comment">
	<!-- User image -->
	<img class="img-circle img-sm" src="uploads/<?php echo getUserImage($alumni_id) ?>" alt="User Image">

	<div class="comment-text">
	<span class="username">
	 <?php echo getAlumniName($alumni_id) ?>
	  <span class="text-muted float-right"><?php echo formatDateTime($today) ?></span>
	</span><!-- /.username -->
	<?php echo $comment ?>
	</div>
	<!-- /.comment-text -->
	</div>

<?php } ?>