<?php 
include '../dbcon.php';
$getchat = "SELECT * FROM `chat_message` WHERE 1=1 AND (`sender_id`='$user_id' AND `receiver_id`='$chatmate' OR `sender_id`='$chatmate' AND `receiver_id`='$user_id') ORDER BY `chat_date` ASC ";
$getchatq  = $con->query($getchat);
$uinfo = get_alumni_information($chatmate);
 ?>
<div class="modal-dialog modal-lg">
  <div class="modal-content bg-secondary">
    <div class="modal-header bg-dark">
      <h4 class="modal-title"><?php echo $uinfo['fname'].' '.$uinfo['mname'].' '.$uinfo['lname'] ?></h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>
    </div>
    <form id="send_message" data_chatm="<?php echo $chatmate ?>">
      <div class="modal-body bg-white">
        <div class="direct-chat-messages" style="height: 400px;overflowY: scroll ;">
          <?php 
            while ($row = $getchatq->fetch_array()) {
              if ($row['sender_id'] == $user_id) { ?>
                <div class="direct-chat-msg m-4 right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-timestamp float-right"><?php echo date("F d, Y h:i a", strtotime($row['chat_date'])) ?></span>
                    </div>
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <div class="direct-chat-text bg-info">
                      <?php echo $row['chat_message'] ?>
                    </div>
                  </div>
              <?php }else{ ?>
                <div class="direct-chat-msg m-4">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-timestamp float-left"><?php echo date("F d, Y h:i a", strtotime($row['chat_date'])) ?></span>
                    </div>
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="Message User Image">
                    <div class="direct-chat-text">
                      <?php echo $row['chat_message'] ?>
                    </div>
                  </div>
             <?php }
            }
           ?>
      </div>
    </div>
    <div class="modal-footer bg-dark d-flex">
      <div class="row" style="width:100%;">
        <div class="col-12">
           <button type="submit" style="width:100%;padding: 10px 20px;"  class="btn btn-outline-light float-right mb-3"><i class="fa fa-envelope"></i> Send Message</button>
        </div>
        <div class="col-12">
          <div class="form-group chatmesCont" style="width:100%">
        <textarea id="chatarea" name="chatmessage" placeholder="Type Message Here" rows="3" class="form-control " style="max-height: 150px;"></textarea>
      </div>
        </div>
      </div>
    </div>
    </form>
  </div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->