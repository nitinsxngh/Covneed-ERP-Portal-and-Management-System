<style type="text/css">
  /* Mobile Responsive */
  @media only screen and (max-width: 940px) {
    .fetch-con-1-div-1-2-2-1 {
      height: 35px;
      width: 96%;
      background-color: grey;
      margin: 10px auto;
    }

    .fetch-con-1-div-1-2-2-1-1 {
      height: 35px;
      width: 20%;
      background-color: #c9e0ea;
      float: left;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .fetch-con-1-div-1-2-2-1-2 {
      height: 35px;
      width: 45%;
      background-color: #ffffff;
      float: left;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .fetch-con-1-div-1-2-2-1-3 {
      height: 35px;
      width: 20%;
      background-color: #c9e0ea;
      float: left;
      display: flex;
    }

    .fetch-con-1-div-1-2-2-1-4 {
      height: 35px;
      width: 15%;
      background-color: #ffffff;
      float: right;
      display: flex;
    }
  }

  /* Desktop Responsive */
  @media only screen and (min-width: 940px) {
    .fetch-con-1-div-1-2-2-1 {
      height: 35px;
      width: 90%;
      background-color: grey;
      margin: 10px auto;
    }

    .fetch-con-1-div-1-2-2-1-1 {
      height: 35px;
      width: 25%;
      background-color: #c9e0ea;
      float: left;
      display: flex;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    .fetch-con-1-div-1-2-2-1-2 {
      height: 35px;
      width: 40%;
      background-color: #ffffff;
      float: left;
      display: flex;
    }

    .fetch-con-1-div-1-2-2-1-3 {
      height: 35px;
      width: 20%;
      background-color: #c9e0ea;
      float: left;
      display: flex;
    }

    .fetch-con-1-div-1-2-2-1-4 {
      height: 35px;
      width: 15%;
      background-color: #ffffff;
      float: right;
      display: flex;
    }
  }
</style>

<?php
session_start();
$session_user_code = $_SESSION['user_code'];
include'../../connection/connection.php';
?>

<?php 
$sql1 = "SELECT * FROM needers ORDER BY post_time DESC";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    while($row = mysqli_fetch_assoc($result1)) {
    $first_name = $row["first_name"];
    $title = $row["title"]; 
    $description = $row["description"];
    $phone = $row["phone"];
    $post_time = $row["post_time"];
?>


				<div class="fetch-con-1-div-1-2-2-1" style="">
					<div class="fetch-con-1-div-1-2-2-1-1" style="">
						<span style="font-size: 13.5px; padding: 10px 4px;"><?php echo "$first_name"; ?></span>
					</div>
					<div class="fetch-con-1-div-1-2-2-1-2" style="">
						<span style="font-size: 13.5px; padding: 10px 4px;"><?php echo "$title"; ?></span>
					</div>
					<div class="fetch-con-1-div-1-2-2-1-3" style="">
						<span style="font-size: 13.5px; padding: 10px 4px;">
                           <?php $finalPhone = substr($phone, 0, 5);
                              echo "$finalPhone".'***';
                            ?>
						</span>
					</div>
					<div class="fetch-con-1-div-1-2-2-1-4" style="">
                          <?php $resPost_time = strtotime( $post_time );
                           $finalDate = date( 'M:d H:i', $resPost_time );
                          ?>
                        <span style="font-size: 12px; padding: 10px 4px;">
                        	<?php echo "$finalDate"; ?>
						</span>
					</div>
				</div>

<?php
    }
} else {
    echo "No Needers!";
}
?>