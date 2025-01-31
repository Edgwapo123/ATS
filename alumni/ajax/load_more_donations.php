<?php
include '../dbcon.php'; // Include your database connection

$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

$sql = "SELECT * FROM `post` WHERE `post_category`='Events' AND `post_status`=1 ORDER BY `post_date` DESC LIMIT 6 OFFSET $offset";
$query = $con->query($sql);

while ($post = $query->fetch_array()) {
    switch ($post['post_category']) {
        case 'JobPost':
            $category_post = "Job Opportunity";
            break;
        case 'Events':
            $category_post = "Event";
            break;
        case 'Trainings':
            $category_post = "Training";
            break;
        case 'Donations':
            $category_post = "Donation";
            break;
    }
?>
 <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex">
        <div class="card flex-fill">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <img src="<?php echo (!empty($post['post_img']) ? 'uploads/'.$post['post_img'] : 'images/default.jpg') ?>" 
                             style="width: 100%; height: 200px; object-fit: cover; object-position: center;">
                    </div>
                    <div class="col-12">
                        <h3 class="mt-3" style="font-family:tahoma"><?php echo $post['post_title'] ?></h3>
                        <h6><?php echo $category_post ?></h6>
                        <span><small>Posted: <?php echo date("F d, Y h:i a", strtotime($post['post_date'])) ?></small></span><br>
                        <button class="btn btn-md btn-secondary text-center mt-3 float-right <?php echo (isset($user_id)) ? 'open_post' : '' ?>" data-post_id="<?php echo $post[0] ?>" style="width:250px;">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
