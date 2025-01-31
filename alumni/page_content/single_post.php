<?php 

$sql = "SELECT * FROM `post` WHERE `post_id`='$post_id'";
$query = $con->query($sql);
$row = $query->fetch_array();
$pcategory = $row['post_category'];
$updateView = Update_postView($post_id);
 ?>
 <style type="text/css">
   .card-body img{
    min-height: 100%;
    width: 25% !important;
   }
   #post_content p{
         text-align:justify;
     }
 @media screen and  (max-width:720px){
     #post_content p{
         font-size:15px !important;
     }
     #post_content h2{
         font-size:25px !important;
     }
     #post_content img{
         width:100% !important;
     }
     #post_content hr{
         display:none;
     }
 }
 </style>
<div class="row">
  <div class="col-12">
    <div class="card card-widget card-success">
              <div class="card-header">
                <div class="user-block">
                  <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
                  <span class="username"><a href="#">ADMINISTRATOR.</a></span>
                  <span class="description" style="color:white;"><?php echo formatDateTime($row['post_date']); ?></span>
                </div>
                <!-- /.user-block -->
                <div class="card-tools">
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header --> 
              <div class="card-body" id="post_content"> 
                <!-- post text -->
                <div style="width:100%;display: flex; justify-content: space-around;">
                  <img style="margin: auto;max-width: 1000px;height: 400px;object-fit: cover;border-radius: 30px;width:100% !important" src="uploads/<?php echo $row['post_img'] ?>">
                </div>
                <h2 class="mb-3 mt-4" style="text-align:center;margin-bottom: 3rem;"><?php echo $row['post_title'] ?></h2>
                <hr class="mb-2 mt-2" style="border:solid 2px green">
                  <?php echo $row['post_content'] ?>
               <?php if ($q != 'view_post'): ?>
                  <!-- Social sharing buttons -->
                <button type="button" class="btn btn-default btn-sm post_like" data-post_id='<?php echo $post_id ?>' data-post_liker="<?php echo $user_id ?>"><i class="far <?php echo (checkLiked($post_id,$user_id) > 0) ? 'fa-thumbs-down' : 'fa-thumbs-up' ?> "></i> <?php echo (checkLiked($post_id,$user_id) > 0) ? 'Unlike' : 'Like' ?></button>
                <?php if ($pcategory == 'Events' || $pcategory == 'Trainings'): ?>
                  <button type="button" class="btn btn-default btn-sm mark_attend" data-post_id='<?php echo $post_id ?>' data-post_liker="<?php echo $user_id ?>"><i class="fas fa-check-circle "></i> <?php echo (checkAttendance($user_id,$post_id) > 0) ? 'You confirmed that you will attend!' : 'Marked Attend' ?>
                  </button>
                <?php endif ?>
               <?php endif ?> 
                <span class="float-right text-muted"><?php echo getLikeCount($post_id) ?> likes - <?php echo gettotalComment($post_id) ?> comments</span> <br>
                 <hr class="mb-2 mt-2" style="border:solid 2px green">
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form id="comment_on_post">
                  <img class="img-fluid img-circle img-sm" src="uploads/<?php echo getUserImage($user_id) ?>" alt="Alt Text">
                  <!-- .img-push is used to add margin to elements next to floating images -->
                  <div class="img-push">
                    <input id="coment_box" data-post_id="<?php echo $post_id ?>" data-alumni_id="<?php echo $user_id ?>" type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                  </div>
                </form>
                <hr>
              </div>
              <div class="card-footer card-comments" data-post_id="<?php echo $post_id ?>">
               
              </div>
              <!-- /.card-footer -->
              <!-- /.card-footer -->
            </div>
  </div>
</div>