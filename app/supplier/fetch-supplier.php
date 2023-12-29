<style type="text/css">


/* Desktop Responsive */
@media only screen and (min-width: 940px) {

	

.fetch-con-2-div-1-1-2 {
  height: 35px; width: 90%; background-color: grey; margin: 10px auto 0px auto;
}

.fetch-con-2-div-1-1-2-1 {
  height: 35px; width: 15%; background-color: #c9e0ea; float: left; display: flex; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
}

.fetch-con-2-div-1-1-2-2 {
  height: 35px; width: 20%; background-color: #ffffff; float: left; display: flex;
}


.fetch-con-2-div-1-1-2-3 {
  height: 35px; width: 30%; background-color: #c9e0ea; float: left; display: flex; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
}

.fetch-con-2-div-1-1-2-4 {
  height: 35px; width: 20%; background-color: #ffffff; float: left; display: flex;
}


.fetch-con-2-div-1-1-2-5 {
  height: 35px; width: 15%; background-color: #c9e0ea; float: left; display: flex;
}

}



/* Mobile Responsive */
@media only screen and (max-width: 940px) {

.fetch-con-2-div-1-1-2 {
  height: 35px; width: 96%; background-color: grey; margin: 10px auto 0px auto;
}

.fetch-con-2-div-1-1-2-1 {
  height: 35px; width: 30%; background-color: #c9e0ea; float: left; display: flex; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
}

.fetch-con-2-div-1-1-2-2 {
  height: 35px; width: 30%; background-color: #ffffff; float: left; display: flex;
}


.fetch-con-2-div-1-1-2-3 {
  height: 35px; width: 20%; background-color: #c9e0ea; float: left; display: flex; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;
}

.fetch-con-2-div-1-1-2-4 {
  height: 35px; width: 20%; background-color: #ffffff; float: left; display: flex;
}


.fetch-con-2-div-1-1-2-5 {
 display: none;
}


}


</style>


<?php
session_start();
$session_user_code = $_SESSION['user_code'];
include'../../connection/connection.php';
?>


<?php 
$sql2 = "SELECT * FROM supplier WHERE status = 'Verified' ORDER BY last_checked DESC";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_assoc($result2)) {
    $supplier_id = $row["supplier_id"];
    $phone_no = $row["phone_no"]; 
    $address = $row["address"];
    $status = $row["status"];
    $last_checked = $row["last_checked"];
    $supplier_of = $row["supplier_of"];
?>

<form method="POST" action="../admin/volunteer/serv-c-panel-status-supplier.php">
				<div class="fetch-con-2-div-1-1-2" style="">
					<div class="fetch-con-2-div-1-1-2-1" style="">
						<span style="font-size: 13.5px; padding: 10px 4px;"><?php echo "$supplier_of"; ?></span>
					</div>
					<div class="fetch-con-2-div-1-1-2-2" style="">
						<span style="font-size: 13.5px; padding: 10px 4px;"><?php echo "$phone_no"; ?></span>
					</div>
					<div class="fetch-con-2-div-1-1-2-3" style="">
						<span style="font-size: 13.5px; padding: 10px 4px;"><?php echo "$address"; ?></span>
					</div>
					<div class="fetch-con-2-div-1-1-2-4" style="">
						 <?php $res_last_checked = strtotime( $last_checked );
                           $finalDate = date( 'M d H:i', $res_last_checked );
                          ?>
                        <span style="font-size: 11.5px; padding: 10px;">
                        	<?php echo "$finalDate"; ?>
						</span>
					</div>

	                <div class="fetch-con-2-div-1-1-2-5" style="">
                     <span style="font-size: 13.5px; padding: 10px 4px;"><?php echo "$status"; ?></span>
					</div>
				</div>
</form>

<?php
    }
} else {
    echo "No Supplier Found!";
}
?>