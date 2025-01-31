 <?php        
 include '../dbcon.php';             
                  $gcq = $con->query("SELECT * FROM `post_comment` WHERE `post_id`='$post_id' ORDER BY `comment_date` DESC");
                  while ($gcr = $gcq->fetch_array()) {
                 ?>
                 <div class="card-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="uploads/<?php echo getUserImage($gcr['alumni_id']) ?>" alt="User Image">
                    <div class="comment-text">
                    <span class="username">
                     <?php echo getAlumniName($gcr['alumni_id']) ?>
                      <span class="text-muted float-right"><?php echo formatDateTime($gcr['comment_date']) ?></span>
                    </span><!-- /.username -->
                    <?php echo $gcr['comment'] ?>
                    </div>
                    <!-- /.comment-text -->
                  </div>
               <?php } ?>