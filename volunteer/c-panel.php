<?php
session_start();
$session_user_code = $_SESSION['user_code'];
include'../connection/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

</head>
<style type="text/css">
* {
  margin: 0;
  font-family: sans-serif;
  font-size: 13.5px;
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {

  .panel-con-1-div-1 {
    height: 90px;
    width: 96%;
    background-color: #f2f2f2;
    margin: 20px auto 0px auto;
    border: 1px solid #cecece;
  }

  .panel-con-1-div-1-1 {
    height: 35px;
    width: 20%;
    background-color: #ffffff;
    float: left;
    display: flex;
  }

  .panel-con-1-div-1-2 {
    height: 35px;
    width: 30%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .panel-con-1-div-1-3 {
    height: 35px;
    width: 30%;
    background-color: #ffffff;
    float: left;
    display: flex;
  }

  .panel-con-1-div-1-4 {
    height: 35px;
    width: 20%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .panel-con-1-div-1-5 {
    height: 35px;
    width: 100%;
    background-color: #ffffff;
    float: left;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .needHelpTriggerstatus {
    width: 70%;
  }

  .sendStatusBtn {
    width: 30%;
  }

  /*-----------Con-2---------------*/

  .panel-con-2-div-1 {
    height: 35px;
    width: 96%;
    background-color: #ffffff;
    margin: 20px auto;
    padding-bottom: 60px;
  }

  .panel-con-2-div-1-1 {
    height: 35px;
    width: 25%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .panel-con-2-div-1-2 {
    height: 35px;
    width: 30%;
    background-color: #ffffff;
    float: left;
    display: flex;
  }

  .panel-con-2-div-1-3 {
    height: 35px;
    width: 25%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .panel-con-2-div-1-4 {
    height: 35px;
    width: 20%;
    background-color: #ffffff;
    float: left;
    display: flex;
  }

  .panel-con-2-div-1-5 {
    height: 35px;
    width: 100%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .modalNeedHelp {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content-user-help {
    height: 340px;
    width: 90%;
    border-radius: 4px;
    background-color: #fefefe;
    padding: 5px;
    margin: 80px auto;
    border: 1px solid #888;
    text-align: center;
  }

  /*-----------C panel Bottom Nav------------*/

  .c-panel-bottom-nav {
    height: 40px;
    width: 100%;
    position: fixed;
    bottom: 0;
  }

  .c-panel-bottom-nav-div-1 {
    height: 40px;
    width: 100%;
    background-color: #607d8b;
    margin: auto;
  }
}

/* Desktop Responsive */
@media only screen and (min-width: 940px) {

  .panel-con-1-div-1 {
    height: 35px;
    width: 90%;
    background-color: #ffffff;
    margin: 10px auto 0px auto;
  }

  .panel-con-1-div-1-1 {
    height: 35px;
    width: 15%;
    background-color: #c9e0ea;
    float: left;
  }

  .panel-con-1-div-1-2 {
    height: 35px;
    width: 20%;
    background-color: #ffffff;
    float: left;
  }

  .panel-con-1-div-1-3 {
    height: 35px;
    width: 10%;
    background-color: #c9e0ea;
    float: left;
  }

  .panel-con-1-div-1-4 {
    height: 35px;
    width: 15%;
    background-color: #ffffff;
    float: left;
  }

  .panel-con-1-div-1-5 {
    height: 35px;
    width: 40%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .panel-con-1-div-1-6 {
    height: 35px;
    width: 10%;
    background-color: #ffffff;
    float: right;
  }

  /*-----------Con-2---------------*/

  .panel-con-2-div-1 {
    height: 35px;
    width: 90%;
    background-color: grey;
    margin: 10px auto 0px auto;
  }

  .panel-con-2-div-1-1 {
    height: 35px;
    width: 15%;
    background-color: #c9e0ea;
    float: left;
  }

  .panel-con-2-div-1-2 {
    height: 35px;
    width: 20%;
    background-color: #ffffff;
    float: left;
  }

  .panel-con-2-div-1-3 {
    height: 35px;
    width: 10%;
    background-color: #c9e0ea;
    float: left;
  }

  .panel-con-2-div-1-4 {
    height: 35px;
    width: 15%;
    background-color: #ffffff;
    float: left;
  }

  .panel-con-2-div-1-5 {
    height: 35px;
    width: 40%;
    background-color: #c9e0ea;
    float: left;
  }

  .modalNeedHelp {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content-user-help {
    height: 340px;
    width: 50%;
    border-radius: 4px;
    background-color: #fefefe;
    margin: 80px auto;
    padding: 20px;
    border: 1px solid #888;
    text-align: center;
  }

  /*-----------C panel Bottom Nav------------*/

  .c-panel-bottom-nav {
    height: 40px;
    width: 100%;
    position: fixed;
    bottom: 0;
  }

  .c-panel-bottom-nav-div-1 {
    height: 40px;
    width: 40%;
    background-color: #607d8b;
    margin: auto;
  }
}

</style>
<body>

<div class="panel-con-msg" style="">
  <h2>Screen Not Supported!</h2>
</div>

<div style="height: 40px; width: 100%; background-color: #607d8b; position: fixed; top: 0; align-items: center; display: flex; justify-content: center;">
	<h2 style="color: #ffffff; font-size: 14px;">Needers</h2>
</div>

<div style="height: 250px; width: 100%; padding-top: 40px; background-color: #f2f2f2; overflow-y: scroll;">

        <div class="panel-con-1-div-1" style="">
          <div>
          <div class="panel-con-1-div-1-1" style="">
            <span style="font-size: 13.5px; padding: 4px 10px; font-weight: bold;">Name</span>
          </div>
          <div class="panel-con-1-div-1-2" style="">
            <span style="font-size: 13.5px; padding: 4px 10px; font-weight: bold;">Need</span>
          </div>
          <div class="panel-con-1-div-1-3" style="">
            <span style="font-size: 13.5px; padding: 4px 10px; font-weight: bold;">Phone No:</span>
          </div>
          <div class="panel-con-1-div-1-4" style="">
            <span style="font-size: 13.5px; padding: 4px 10px; font-weight: bold;">Posted On:</span>
          </div>
        </div>
        <div class="panel-con-1-div-1-5" style="">
          <span style="font-size: 13.5px; padding: 4px 10px; font-weight: bold;">Status</span>
        </div>

        </div>

<?php 
$sql1 = "SELECT * FROM needers ORDER BY post_time DESC";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    while($row = mysqli_fetch_assoc($result1)) {
    $first_name = $row["first_name"];
    $title = $row["title"]; 
    $description = $row["description"];
    $phone = $row["phone"];
    $post_code = $row["post_code"];
    $status = $row["status"];
    $post_time = $row["post_time"];
?>

<form method="POST" action="../admin/volunteer/serv-c-panel-status-needer.php">
				<div class="panel-con-1-div-1" style="">
          <div>
					<div class="panel-con-1-div-1-1" style="">
						<span style="font-size: 13px; padding: 8px 4px;"><?php echo "$first_name"; ?></span>
					</div>
					<div class="panel-con-1-div-1-2" style="overflow: hidden; text-overflow: ellipsis;">
						<span style="font-size: 13px; padding: 4px;"><?php echo "$title"; ?></span>
					</div>
					<div class="panel-con-1-div-1-3" style="">
						<span style="font-size: 13px; padding: 10px 4px;"><?php echo "$phone"; ?></span>
					</div>
					<div class="panel-con-1-div-1-4" style="">
             <?php $resPost_time = strtotime($post_time);
                $finalDate1 = date( 'M d H:i', $resPost_time );
              ?>
            <span style="font-size: 13px; padding: 4px;">
              <?php echo "$finalDate1"; ?>
            </span>
					</div>
        </div>

              <div>
	                <div class="panel-con-1-div-1-5" style="">
                      <select id="status" name="status" class="needHelpTriggerstatus" data-needHelpTriggerstatus="modalstatus<?php echo $post_code ?>">
                      	   <option selected="selected"><?php echo "$status"; ?></option>
                           <option value="On Progress">On Progress</option>
                           <option value="Not Picking Up">Not Picking Up</option>
                           <option value="Busy">Busy</option>
                           <option value="Solved">Solved</option>
                           <option value="Remove">Remove</option>
                      </select>
                      <input id="post_code" type="hidden" name="post_code" value="<?php echo $post_code ?>">
                      <input class="sendStatusBtn" type="submit" name="sendStatusBtn">
                       <div id="status_msg"></div>
					        </div>
              </div>

				</div>
</form>
              <button style="float: right;" id="needHelpTriggerBtn" class="needHelpTriggerBtn1" help-modal1="modalNeedHelp<?php echo $post_code ?>" >Details</button>
         <div id="modalNeedHelp<?php echo $post_code ?>" class="modalNeedHelp<?php echo $post_code ?>" style="height: 120px; width: 90%; background-color: #f2f2f2; border: 1px solid grey; margin: auto; display: none;">
            <div class="modal-content-user-help1">
              <div style="height: auto; width: 80%; float: left;">
                <span>Title:&nbsp;</span><p style="font-size: 14.5px; padding: 10px;"><?php echo $title ?></P>
              </div>
              <div style="height: auto; width: 80%; float: left;">
                <span>Description:&nbsp;</span><p style="font-size: 14.5px; padding: 10px;"><?php echo $description ?></P>
              </div>

              <div style="height: 40px; width: 20%; float: right;">
                <button class="needHelpTriggerCloseBtn1" data-needHelpTriggerCloseBtn1="modalNeedHelp<?php echo $post_code ?>" style="cursor: pointer; float: right;">Close</button>
              </div>
  
           </div>
         </div>  

<?php
    }
} else {
    echo "Error!";
}
?>
</div>

<!------------------------------------->

<div style="height: 40px; width: 100%; background-color: #607d8b; align-items: center; display: flex; justify-content: center;">
	<h2 style="font-size: 14px; color: #ffffff;">Supplier</h2>
</div>

<div style="height: 250px; width: 100%; padding-top: 20px; padding-bottom: 40px; background-color: #f2f2f2; overflow-y: scroll;">

        <div class="panel-con-2-div-1" style="">
           <div class="panel-con-2-div-1-1" style="">
            <span style="font-size: 13.5px; padding: 4px; font-weight: bold;">Supplier Of</span>
          </div>
          <div class="panel-con-2-div-1-2" style="">
            <span style="font-size: 13.5px; padding: 4px; font-weight: bold;">Phone No</span>
          </div>
          <div class="panel-con-2-div-1-3" style="">
            <span style="font-size: 13.5px; padding: 4px; font-weight: bold;">Address</span>
          </div>
          <div class="panel-con-2-div-1-4" style="">
            <span style="font-size: 13.5px; padding: 4px; font-weight: bold;">Time</span>
          </div>
          <div class="panel-con-2-div-1-5" style="">
            <span style="font-size: 13.5px; padding: 4px; font-weight: bold;">Status</span>
          </div>

        </div>

<?php 
$sql2 = "SELECT * FROM supplier ORDER BY posted_on DESC";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_assoc($result2)) {
    $supplier_id = $row["supplier_id"];
    $phone_no = $row["phone_no"]; 
    $address = $row["address"];
    $supplier_of = $row["supplier_of"];
    $status = $row["status"];
    $posted_on = $row["posted_on"];
?>

<form method="POST" action="../admin/volunteer/serv-c-panel-status-supplier.php">
				<div class="panel-con-2-div-1" style="">
          <div class="panel-con-2-div-1-1" style="">
            <span style="font-size: 13px; padding: 4px;"><?php echo "$supplier_of" ?></span>
          </div>
					<div class="panel-con-2-div-1-2" style="">
						<span style="font-size: 13px; padding: 4px;"><?php echo "$phone_no"; ?></span>
					</div>
					<div class="panel-con-2-div-1-3" style="">
						<span style="font-size: 13px; padding: 4px;"><?php echo "$address"; ?></span>
					</div>
					<div class="panel-con-2-div-1-4" style="">
             <?php $resPost_time = strtotime($posted_on);
                $finalDate2 = date( 'M d H:i', $resPost_time );
              ?>
            <span style="font-size: 13px; padding: 4px;">
              <?php echo "$finalDate2"; ?>
            </span>
					</div>
	                <div class="panel-con-2-div-1-5" style="">
                      <select id="status" name="status" class="needHelpTriggerstatus" data-needHelpTriggerstatus="modalstatus<?php echo $supplier_id ?>">
                      	   <option selected="selected"><?php echo "$status"; ?></option>
                           <option value="Verified">Verified</option>
                           <option value="Not Verified">Not verified</option>
                           <option value="Null">Remove</option>
                      </select>
                      <input id="supplier_id" type="hidden" name="supplier_id" value="<?php echo $supplier_id ?>">
                      <input type="submit" name="sendStatusBtn">
                       <div id="status_msg"></div>
					     </div>

				</div>
</form>

<?php
    }
} else {
    echo "Error!";
}
?>
</div>


<div class="c-panel-bottom-nav" style="">
	<div class="c-panel-bottom-nav-div-1" style="">
    <div style="height: 40px; width: 25%; float: left;">
        <button style="padding: 10px;" action="action" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>
   </div>
   <div style="height: 40px; width: 50%; float: left;">
        <input style="width: 100%; padding: 10px; text-align: center;" type="text" placeholder="Add Supplier" id="needHelpTriggerBtn" class="needHelpTriggerBtn" help-modal="modalNeedHelp" >
   </div>
   <div style="height: 40px; width: 25%; float: right;">
     <button style="padding: 10px; float: right;"><i style="font-size: 20px;" class="fa fa-pagelines" aria-hidden="true"></i></button>
   </div>
	</div>
</div>

         <div id="modalNeedHelp" class="modalNeedHelp">
            <div class="modal-content-user-help">
              <div style="height: 60px; width: 100%; justify-content: center; align-items: center; display: flex; align-items: center;">
                <h2>Add Supplier</h2>
              </div>
              <div id="all_msg"></div>
              <div>
              <input id="s_supplier_of" type="text" name="s_supplier_of" placeholder="Supplier Of" maxlength="60" style="height: 30px; width: 90%; margin: 5px auto;">
              <input id="s_phone_no" type="text" name="phone_no" placeholder="Phone No:" maxlength="12" style="height: 30px; width: 90%; margin: 20px auto;">
              </div>
              <textarea id="s_Address" maxlength="620" style="height: 60px; width: 90%; margin: 10px auto;" placeholder="Address:"></textarea>
              <div style="height: 60px; width: 100%;">
                <button style="float: right; margin-right: 40px;" class="s_postBtn" id="s_postBtn">Post</button>
                <button style="float: left; margin-left: 40px;" class="needHelpTriggerCloseBtn" data-needHelpTriggerCloseBtn="modalNeedHelp" style="cursor: pointer;">Close</button>
              </div>
           </div>
         </div>  

</body>
</html>

<script type="text/javascript">

  var modalBtns1 = [...document.querySelectorAll(".needHelpTriggerBtn1")];
  modalBtns1.forEach(function(btn){
    btn.onfocus = function() {
      var modal = btn.getAttribute('help-modal1');
      document.getElementById(modal).style.display = "block";
    }
  });

  var modalBtnsClose1 = [...document.querySelectorAll(".needHelpTriggerCloseBtn1")];
  modalBtnsClose1.forEach(function(btn){
    btn.onclick = function() {
      var modal = btn.getAttribute('data-needHelpTriggerCloseBtn1');
      document.getElementById(modal).style.display = "none";
    }
  });

  $(".s_postBtn").click(function(e) {
    e.preventDefault();
    var s_supplier_of = $("#s_supplier_of").val();
    var s_Address = $("#s_Address").val(); 
    var s_phone_no = $("#s_phone_no").val();
    var dataString1 = 's_phone_no='+s_phone_no+'&s_Address='+s_Address+'&s_supplier_of='+s_supplier_of;

    if($('#s_phone_no').val() == ''){

    } else {
      $.ajax({
        type: 'POST',
        data: dataString1,
        url: '../admin/supplier/serv-supplier.php',
        success:function(data) {
          $("#s_Added_msg").html(data);
          $("#modalNeedHelp").hide();
          location.reload();
        }
      });
    }
  });  

  var modalBtns = [...document.querySelectorAll(".needHelpTriggerBtn")];
  modalBtns.forEach(function(btn){
    btn.onfocus = function() {
      var modal = btn.getAttribute('help-modal');
      document.getElementById(modal).style.display = "block";
    }
  });

  window.addEventListener('click', function(event) {
    if (event.target.className === "modalNeedHelp") {
      event.target.style.display = "none";
    }
  });

  var modalBtnsClose = [...document.querySelectorAll(".needHelpTriggerCloseBtn")];
  modalBtnsClose.forEach(function(btn){
    btn.onclick = function() {
      var modal = btn.getAttribute('data-needHelpTriggerCloseBtn');
      document.getElementById(modal).style.display = "none";
    }
  });

</script>
