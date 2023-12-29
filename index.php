
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $user_code = $_SESSION['user_code'];
?>

<?php
 if(isset($_SESSION['user_code'])){ ?>
      <?php // echo "Loged-in"; ?>
  <?php }else{ ?>
    <?php
    header("location: registration/registration.php");
    ?>
  <?php } 

$session_user_code = $_SESSION['user_code'];
include'connection/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Covneed</title>
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
</head>
<style type="text/css">

* {
  margin: 0;
  font-family: sans-serif;
}

.live {
  animation: blinker 1.5s cubic-bezier(.5, 0, 1, 1) infinite alternate;
}

@keyframes blinker {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {
  .index-navigation-c {
    display: none;
  }

  .index-navigation-m {
    height: 40px;
    width: 100%;
    background-color: #607d8b;
    z-index: 999999;
    position: fixed;
    bottom: 0;
  }

  .index-con-1-div-1 {
    height: 100%;
    width: 100%;
    background-color: #efefef;
    justify-content: center;
    display: flex;
    align-items: center;
  }

  .index-con-1-div-1-1 {
    height: 100%;
    width: 100%;
    background-color: yellow;
  }

  .index-con-1-div-1-2 {
    height: 100%;
    width: 100%;
    background-color: #ffffff;
  }

  .index-con-1-div-1-2 {
    height: auto;
    width: 100%;
    float: left;
    background-color: #ffffff;
  }

  .index-con-2-div-1 {
    height: 100%;
    width: 100%;
    float: right;
    background-color: #ffffff;
  }

  .index-con-2-div-1-1 {
    height: 300px;
    width: 100%;
    padding-bottom: 40px;
    background-color: #ffffff;
    overflow-y: scroll;
  }

  .volunteer-con-div {
    display: none;
  }

  .avilable-bed-con-div {
    display: none;
  }

  /*--------Con 1--------*/
  .con-1-div-1-2-1 {
    height: 40px;
    width: 100%;
    background-color: #f2f2f2;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .con-1-div-1-2-1-span-1 {
    font-size: 13.5px;
    color: black;
  }

  .con-1-div-1-2-2 {
    min-height: auto;
    height: 450px;
    width: 100%;
    padding-bottom: 40px;
    background-color: #ffffff;
    overflow-y: scroll;
  }

  .con-1-div-1-2-2-1 {
    height: 35px;
    width: 96%;
    background-color: grey;
    margin: 10px auto;
  }

  .con-1-div-1-2-2-1-1 {
    height: 35px;
    width: 20%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .con-1-div-1-2-2-1-2 {
    height: 35px;
    width: 45%;
    background-color: #ffffff;
    float: left;
    display: flex;
  }

  .con-1-div-1-2-2-1-3 {
    height: 35px;
    width: 20%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .con-1-c-phone-no {
    display: none;
  }

  .con-1-m-phone-no {
    font-size: 13px;
    font-weight: bold;
    padding: 10px;
  }

  .con-1-div-1-2-2-1-4 {
    height: 35px;
    width: 15%;
    background-color: #ffffff;
    float: right;
    display: flex;
  }

  /*---------------Con 2--------------------*/
  .con-2-div-1-1-1 {
    height: 40px;
    width: 100%;
    background-color: #f2f2f2;
    justify-content: center;
    display: flex;
    align-items: center;
  }

  .con-2-div-1-1-1-span-1 {
    font-size: 13.5px;
    color: black;
  }

  .con-2-div-1-1-2 {
    height: 35px;
    width: 96%;
    background-color: grey;
    margin: 10px auto 0px auto;
  }

  .con-2-div-1-1-2-1 {
    height: 35px;
    width: 30%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .con-2-div-1-1-2-2 {
    height: 35px;
    width: 30%;
    background-color: #f2f2f2;
    float: left;
    display: flex;
  }

  .con-2-c-phone-no {
    display: none;
  }

  .con-2-m-phone-no {
    font-size: 14px;
    font-weight: bold;
    padding: 10px;
  }

  .con-2-div-1-1-2-3 {
    height: 35px;
    width: 20%;
    background-color: #c9e0ea;
    float: left;
    display: flex;
  }

  .con-2-div-1-1-2-4 {
    height: 35px;
    width: 20%;
    background-color: #ffffff;
    float: left;
    display: flex;
  }

  .con-2-c-last-checked {
    display: none;
  }

  .con-2-m-last-checked {
    font-size: 12px;
    font-weight: bold;
    padding: 10px;
  }

  .con-2-div-1-1-2-5 {
    /* height: 35px; width: 15%; background-color: #c9e0ea; float: left; display: flex; */
    display: none;
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
    margin: 80px auto;
    border: 1px solid #888;
    text-align: center;
  }

  .modalNeedHelp1 {
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

  .modal-content-user-help1 {
    height: 340px;
    width: 90%;
    border-radius: 4px;
    background-color: #fefefe;
    margin: 80px auto;
    border: 1px solid #888;
    text-align: center;
  }

  .modalNeedHelp2 {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 94%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content-user-help2 {
    height: 340px;
    width: 50%;
    border-radius: 4px;
    background-color: #fefefe;
    margin: 80px auto;
    padding: 20px;
    border: 1px solid #888;
    text-align: center;
  }

  .modalNeedHelp-pop {
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

  .modal-content-user-help-pop {
    height: 100vh;
    width: 100%;
    border-radius: 4px;
    background-color: #fefefe;
    border: 1px solid #888;
    text-align: center;
  }

  /*--------------------Modal Last----------------------*/
  .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 80px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 4px;
    border: 1px solid #888;
    width: 90%;
    height: 400px;
  }
}




/* Desktop Responsive */
@media only screen and (min-width: 940px) {

  .index-navigation-c {
    height: 100vh;
    width: 8%;
    background-color: #607d8b;
    z-index: 999999;
    position: fixed;
    float: right;
    right: 0;
  }

  .index-navigation-m {
    display: none;
  }

  .index-con-1-div-1 {
    height: 680px;
    width: 92%;
    background-color: #efefef;
    justify-content: center;
    display: flex;
    align-items: center;
  }

  .index-con-1-div-1-1 {
    height: 600px;
    width: 90%;
    background-color: #ffffff;
  }

  .index-con-1-div-1-2 {
    height: 580px;
    width: 50%;
    float: left;
    background-color: red;
  }

  .index-con-2-div-1 {
    height: 580px;
    width: 50%;
    float: right;
    background-color: #ffffff;
  }

  .index-con-2-div-1-1 {
    height: 250px;
    width: 100%;
    background-color: #ffffff;
    overflow-y: scroll;
  }

  .volunteer-con-div,
  .avilable-bed-con-div {
    height: 40px;
    width: 100%;
    justify-content: center;
    display: flex;
    align-items: center;
  }

  /*------Con 1----------*/
  .con-1-div-1-2-1 {
    height: 40px;
    width: 100%;
    background-color: #607d8b;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .con-1-div-1-2-1-span-1 {
    font-size: 13.5px;
    color: #ffffff;
  }

  .con-1-div-1-2-2 {
    height: 500px;
    width: 100%;
    background-color: #ffffff;
    overflow-y: scroll;
  }

  .con-1-div-1-2-2-1 {
    height: 35px;
    width: 90%;
    background-color: grey;
    margin: 10px auto;
  }

  .con-1-div-1-2-2-1-1 {
    height: 35px;
    width: 25%;
    background-color: #c9e0ea;
    float: left;
  }

  .con-1-div-1-2-2-1-2 {
    height: 35px;
    width: 40%;
    background-color: #ffffff;
    float: left;
  }

  .con-1-div-1-2-2-1-3 {
    height: 35px;
    width: 20%;
    background-color: #c9e0ea;
    float: left;
  }

  .con-1-c-phone-no {
    font-size: 13px;
    font-weight: bold;
    padding: 10px;
  }

  .con-1-m-phone-no {
    display: none;
  }

  .con-1-div-1-2-2-1-4 {
    height: 35px;
    width: 15%;
    background-color: #ffffff;
    float: right;
  }

  /*---------------Con 2--------------------*/
  .con-2-div-1-1-1 {
    height: 40px;
    width: 100%;
    background-color: #607d8b;
    justify-content: center;
    display: flex;
    align-items: center;
  }

  .con-2-div-1-1-1-span-1 {
    font-size: 13.5px;
    color: #ffffff;
  }

  .con-2-div-1-1-2 {
    height: 35px;
    width: 90%;
    background-color: grey;
    margin: 10px auto 0px auto;
  }

  .con-2-div-1-1-2-1 {
    height: 35px;
    width: 15%;
    background-color: #c9e0ea;
    float: left;
  }

  .con-2-div-1-1-2-2 {
    height: 35px;
    width: 20%;
    background-color: #f2f2f2;
    float: left;
  }

  .con-2-c-phone-no {
    font-size: 14px;
    font-weight: bold;
    padding: 10px;
  }

  .con-2-m-phone-no {
    display: none;
  }

  .con-2-div-1-1-2-3 {
    height: 35px;
    width: 30%;
    background-color: #c9e0ea;
    float: left;
  }

  .con-2-div-1-1-2-4 {
    height: 35px;
    width: 20%;
    background-color: #ffffff;
    float: left;
  }

  .con-2-c-last-checked {
    font-size: 14px;
    font-weight: bold;
    padding: 10px;
  }

  .con-2-m-last-checked {
    display: none;
  }

  .con-2-div-1-1-2-5 {
    height: 35px;
    width: 15%;
    background-color: #c9e0ea;
    float: left;
  }

  .modalNeedHelp {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 94%;
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

  .modalNeedHelp1 {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 94%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content-user-help1 {
    height: 340px;
    width: 50%;
    border-radius: 4px;
    background-color: #fefefe;
    margin: 80px auto;
    padding: 20px;
    border: 1px solid #888;
    text-align: center;
  }

  .modalNeedHelp2 {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 94%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content-user-help2 {
    height: 100vh;
    width: 100%;
    background-color: #fefefe;
    text-align: center;
  }

  .modalNeedHelp-pop {
    display: none;
    position: fixed;
    z-index: 8888;
    left: 0;
    top: 0;
    width: 94%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
  }

  .modal-content-user-help-pop {
    height: 340px;
    width: 50%;
    border-radius: 4px;
    background-color: #fefefe;
    margin: 80px auto;
    padding: 20px;
    border: 1px solid #888;
    text-align: center;
  }

  /*--------------------Modal Last----------------------*/
  .modal {
    display: none;
    /* Hidden by default */
  }

  /* Modal Content */
  .modal-content {
    display: none;
  }
}

</style>
<body>


<?php 
$sql = "SELECT * FROM registration WHERE user_code = '$session_user_code'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $first_name = $row["first_name"];
    $static_latitude = $row["static_latitude"];
    $static_longitude = $row["static_longitude"];
    $city = $row["city"];
    $profile_status = $row["profile_status"];
    $type = $row["type"];
?>

<?php
if($profile_status == 3) {
?>

<?php  
}else{
?>
<div id="modalNeedHelp-pop" class="modalNeedHelp-pop">
    <div class="modal-content-user-help-pop">
        <div id="box-1" style="height: 100%; width: 100%; background-color: #f2f2f2;">
          <div id="firstNameModalCon" style="display: none;">
           <h2 style="padding: 60px; font-size: 18px; color: #5d5d5d;">Enter Your First Name</h2>
            <?php include"app/box/box-firstname.php" ?>
          </div>
        </div>
        <div id="box-2" style="height: 100%; width: 100%; background-color: #f2f2f2; display: none;">
          <div id="cityModalCon" style="display: none;">
            <h2 style="padding: 60px; font-size: 18px; color: #5d5d5d;">Enter The City</h2>
            <?php include"app/box/box-city.php" ?>
          </div>
        </div>
        <div id="box-3" style="height: 100%; width: 100%; background-color: #f2f2f2; display: none;">
        <div id="locationModalCon" style="display: none;">
          <h2 style="padding: 60px; font-size: 18px; color: #5d5d5d;">Allow Location</h2>
          <?php include"app/box/box-location.php" ?>
        </div>
        </div>
    </div>
</div>  

  <script type="text/javascript">
    $('.modalNeedHelp-pop').show('2000');
    setTimeout(function() { $("#firstNameModalCon").show(); }, 1000);
  </script>

<?php
    }
  }
} else {
    echo "Error!";
}
?>

<div class="index-navigation-c" style="position: relative;">
  <div style="height: 40px; width: 100%; justify-content: center; display: flex; align-items: center;">
    <span style="font-size: 13.5px; font-weight: bold; color: #ffffff;"><?php echo $first_name ?></span>
  </div>
  <?php 
    if($type == 'helper'){
  ?>
    <div class="volunteer-con-div" style="">
      <a href="Volunteer/c-panel.php"><i style="font-size: 25px; color: #a6ffa6;" class="fa fa-pagelines" aria-hidden="true"></i></a>
    </div>
  <?php
    } else {
  ?>
  <?php
    }
  ?>
  <div class="avilable-bed-con-div" style="">
    <button id="needHelpTriggerBtn2" class="needHelpTriggerBtn2" help-modal2="modalNeedHelp2" style="cursor: pointer; border: none; background: none; color: #ffffff;"><i style="font-size: 25px;" class="fa fa-bed" aria-hidden="true"></i></button>
  </div>
  <div style="height: 80px; width: 100%; display: flex; justify-content: center; align-items: center; position: absolute; bottom: 0;">
    <a style="font-size: 24px;" href="logout.php">Logout</a>
  </div>
</div>

<div class="index-navigation-m" style="background-color: ;">
  <div style="height: 40px; width: 25%; background-color: ; float: left; justify-content: center; display: flex; align-items: center;">
    <?php 
      if($type == 'helper'){
    ?>
      <a href="Volunteer/c-panel.php"><i style="font-size: 25px; color: #a6ffa6;" class="fa fa-pagelines" aria-hidden="true"></i></a>
    <?php
      } else {
    ?>
    <?php
      }
    ?>
  </div>
  <div style="height: 40px; width: 25%; background-color: ; float: right; display: flex; align-items: center; justify-content: center;">
    <i id="myBtn" style="font-size: 25px; color: white;" class="fa fa-user" aria-hidden="true"></i>
  </div>
</div>

<div class="index-con-1-div-1" style="">
  <div class="index-con-1-div-1-1" style="">

    <div class="index-con-1-div-1-2" style="">
      <div class="con-1-div-1-2-1" style="">
        <span class="con-1-div-1-2-1-span-1" style="">Needers</span>
        <span class="live" style="font-size: 13px; color: red; padding: 10px;"><i class="fa fa-circle" aria-hidden="true"></i></span>
        <span style="font-size: 13px;">Live</span>
      </div>
      <div class="con-1-div-1-2-2" style="">
        <div class="con-1-div-1-2-2-1" style="">
          <div class="con-1-div-1-2-2-1-1" style="">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Name</span>
          </div>
          <div class="con-1-div-1-2-2-1-2" style="">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Need</span>
          </div>
          <div class="con-1-div-1-2-2-1-3" style="">
            <span class="con-1-c-phone-no" style="">Phone No.</span>
            <span class="con-1-m-phone-no" style="">P No.</span>
          </div>
          <div class="con-1-div-1-2-2-1-4" style="">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Date</span>
          </div>
        </div>
        <div class="fetchNeeder">
          
        </div>
      </div>
      <div style="height: 40px; width: 100%; background-color: #607d8b; justify-content: center; display: flex; align-items: center;">
        <input  type="text" id="needHelpTriggerBtn" placeholder="Post Help" style="width: 80%; padding: 4px;" class="needHelpTriggerBtn" help-modal="modalNeedHelp" >
        <input type="submit" name="" value="Post" style="background-color: #ff2e2e; color: #ffffff; padding: 4px;">
      </div>
    </div>

    <div class="index-con-2-div-1" style="">
      <div class="index-con-2-div-1-1" style="">
        <div class="con-2-div-1-1-1" style="">
          <span class="con-2-div-1-1-1-span-1" style="">Suppliers</span>
        </div>
          <div class="con-2-div-1-1-2" style="">
           <div class="con-2-div-1-1-2-1" style="">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Item</span>
          </div>
          <div class="con-2-div-1-1-2-2" style="">
            <span class="con-2-c-phone-no" style="">Phone No</span>
            <span class="con-2-m-phone-no" style="">P No</span>
          </div>
          <div class="con-2-div-1-1-2-3" style="">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Address</span>
          </div>
          <div class="con-2-div-1-1-2-4" style="">
            <span class="con-2-c-last-checked" style="">Last Checked</span>
            <span class="con-2-m-last-checked" style="">Verified On</span>
          </div>
          <div class="con-2-div-1-1-2-5" style="">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Status</span>
          </div>
        </div>
        <div class="fetchSupplier">
          
        </div>
      </div>

    <div style="height: 250px; width: 100%; background-color: #ffffff; overflow-y: scroll;">

      <div style="height: 40px; width: 100%; background-color: #607d8b; display: flex; justify-content: center; align-items: center;">
        <span style="font-size: 13.5px; color: #ffffff;">Helpers(Volunteers)</span>
      </div>
        <div style="height: 35px; width: 90%; background-color: grey; margin: 10px auto;">
          <div style="height: 35px; width: 50%; background-color: #c9e0ea; float: left; display: flex;">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Name</span>
          </div>
          <div style="height: 35px; width: 50%; background-color: #f2f2f2; float: right; display: flex;">
            <span style="font-size: 14px; font-weight: bold; padding: 10px;">Volunteer</span>
          </div>
        </div>
        <div class="fetchHelper" style="overflow-y: scroll;">
          
        </div>

      </div>
        <div style="height: 40px; width: 100%; margin-bottom: 40px; background-color: #607d8b; justify-content: center; display: flex; align-items: center;">
         <button id="needHelpTriggerBtn1" class="needHelpTriggerBtn1" help-modal1="modalNeedHelp1" style="cursor: pointer;">Be A Volunteer</button>
        </div>

    </div>


  </div>


</div>




         <div id="modalNeedHelp" class="modalNeedHelp">
            <div class="modal-content-user-help">
                <div style="height: 40px; width: 100%; background-color: #607d8b; color: #ffffff; justify-content: center; align-items: center; display: flex; align-items: center;">
                <h3 style="font-size: 14px;">Post Help</h3>
              </div>
              <div id="all_msg"></div>
              <div>
              <input id="title" type="text" name="title" placeholder="Ex:- Need Oxygen" maxlength="40" style="height: 25px; width: 90%; margin: 20px auto; padding: 4px; border: 1px solid #bfbfbf;">
              </div>
              <div style="height: 30px; width: 100%;">
                <span style="font-size: 13px; color: #7b7b7b;">Description</span>
              </div>
              <textarea id="description" style="height: 130px; width: 90%; border: 1px solid #bfbfbf; padding: 4px;"></textarea>
              <br>
                <div style="height: 40px; width: 100%; bottom: 0;">
                   <button  style="cursor: pointer; background-color: #ff2e2e; color: #ffffff; float: left; margin-left: 40px; margin-top: 10px;" class="needHelpTriggerCloseBtn" data-needHelpTriggerCloseBtn="modalNeedHelp">Close</button>
                    <button class="postbtn" style="float: right; margin-right: 40px; margin-top: 10px; background-color: #ff2e2e; color: #ffffff;" id="postbtn">Post</button>
                </div>
           </div>
         </div>  



         <div id="modalNeedHelp1" class="modalNeedHelp1">
            <div class="modal-content-user-help1">
              <?php 
              if($type == 'helper'){
              ?>
                <div style="">
                <div style="height: 120px; width: 100%; justify-content: center; align-items: center; display: flex;">
                  <span style="font-size: 13px;">Thank You For Being A Volunteer :)</span>
                </div>
                </div>
                <div style="height: 120px; width: 100%; justify-content: center; align-items: center;">
                   <a style="color: #03ca03;" href="volunteer/c-panel.php"><i style="font-size: 42px;" class="fa fa-users" aria-hidden="true"></i></a><br>
                   <a style="text-decoration: none; font-size: 14px;" href="volunteer/c-panel.php">C-Panel</a>
                </div>
              <?php
               }else{
              ?>
                <div style="">
                <div style="height: 120px; width: 100%; justify-content: center; align-items: center; display: flex;">
                  <span style="font-size: 13px;" id="needHelpv1_msg">Be A Volunteer, Help Who Are In Needs:)</span>
                  <span style="font-size: 13px; display: none;" id="needHelpv2_msg" style="display: none;">You Are Now A Volunteer, Thank You:)</span>
                </div>
                <div>
                  <button id="becomHelperBtn" class="becomHelperBtn">Become Now</button>
                  <input id="null1" type="hidden" name="" value="null1">
                  <input id="null2" type="hidden" name="" value="null2">
                </div>
                </div>
                <div style="height: 120px; width: 100%; justify-content: center; align-items: center; display: flex;">
                  <div class="becomHelper_msg" id="becomHelper_msg"></div>
                </div>
              <?php
              }
              ?>
                <div style="height: 60px; width: 100%; text-align: center;">
                    <button class="needHelpTriggerCloseBtn1" data-needHelpTriggerCloseBtn1="modalNeedHelp1" style="cursor: pointer;">Close</button>
                </div>
           </div>
         </div>  



         <div id="modalNeedHelp2" class="modalNeedHelp2">
            <div class="modal-content-user-help2">
              <iframe src="https://gbncovidtracker.in/" height="100%" width="100%" title="Live Beds"></iframe>
               <button class="needHelpTriggerCloseBtn2" data-needHelpTriggerCloseBtn2="modalNeedHelp2" style="cursor: pointer;">Close</button>
           </div>
         </div>  




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div style="height: 60px; width: 100%; background-color: #607d8b; display: flex; align-items: center; justify-content: center;">
    <h2><span style="color: #ffffff;">Cov<span style="color: red;">need</h2>
  </div>
  <div style="height: 280px; width: 100%; background-color: #ffffff;">
      <div style="height: 40px; width: 100%; justify-content: center; display: flex; align-items: center;">
      <?php 
        if($type == 'helper'){
      ?>
          <a style="text-decoration: none; font-size: 14px;" href="Volunteer/c-panel.php"><i style="font-size: 25px; color: #a6ffa6;" class="fa fa-pagelines" aria-hidden="true"></i>Help People</a>
      <?php
        }else{
      ?>

      <?php
       }
      ?>
  </div>
  <div style="height: 40px; width: 100%; justify-content: center; display: flex; align-items: center;">
    <a href="https://www.instagram.com/urboynitin/">Contact Developer</a>
  </div>
  </div>
  <div style="height: 40px; width: 100%; background-color: #f2f2f2; display: flex; align-items: center; justify-content: center;">
        <span class="close" style="font-weight: bold;">Close</span>
  </div>
  </div>

</div>

</body>
</html>

<script type="text/javascript">

// Modal functionality for "Need Help" buttons
var modalBtns1 = [...document.querySelectorAll(".needHelpTriggerBtn")];
modalBtns1.forEach(function(btn){
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

// Close button functionality for "Need Help" buttons
var closeBtns1 = [...document.querySelectorAll(".needHelpTriggerCloseBtn")];
closeBtns1.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-needHelpTriggerCloseBtn');
    document.getElementById(modal).style.display = "none";
  }
});

// Modal functionality for "Be A Volunteer" buttons
var modalBtns2 = [...document.querySelectorAll(".needHelpTriggerBtn1")];
modalBtns2.forEach(function(btn){
  btn.onfocus = function() {
    var modal = btn.getAttribute('help-modal1');
    document.getElementById(modal).style.display = "block";
  }
});

window.addEventListener('click', function(event) {
  if (event.target.className === "modalNeedHelp1") {
    event.target.style.display = "none";
  }
});

// Close button functionality for "Be A Volunteer" buttons
var closeBtns2 = [...document.querySelectorAll(".needHelpTriggerCloseBtn1")];
closeBtns2.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-needHelpTriggerCloseBtn1');
    document.getElementById(modal).style.display = "none";
  }
});

// Modal functionality for other buttons (e.g., "Be A Volunteer" with different modal names)
var modalBtns3 = [...document.querySelectorAll(".needHelpTriggerBtn2")];
modalBtns3.forEach(function(btn){
  btn.onfocus = function() {
    var modal = btn.getAttribute('help-modal2');
    document.getElementById(modal).style.display = "block";
  }
});

window.addEventListener('click', function(event) {
  if (event.target.className === "modalNeedHelp2") {
    event.target.style.display = "none";
  }
});

// Close button functionality for other buttons
var closeBtns3 = [...document.querySelectorAll(".needHelpTriggerCloseBtn2")];
closeBtns3.forEach(function(btn){
  btn.onclick = function() {
    var modal = btn.getAttribute('data-needHelpTriggerCloseBtn2');
    document.getElementById(modal).style.display = "none";
  }
});

// Ajax request for posting data
$(".postbtn").click(function(e) {
  e.preventDefault();
  var title = $("#title").val(); 
  var description = $("#description").val();
  var dataString1 = 'title='+title+'&description='+description;

  if ($('#title').val() !== '') {
    $.ajax({
      type: 'POST',
      data: dataString1,
      url: 'admin/needer/serv-needer.php',
      success:function(data) {
        $("#all_msg").html(data);
        $("#modalNeedHelp").hide('2000');
      }
    });
  }
});  

// Ajax request for becoming a helper
$(".becomHelperBtn").click(function(e) {
  e.preventDefault();
  var null1 = $("#null1").val(); 
  var null2 = $("#null2").val();
  var dataString2 = 'null1='+null1+'&null2='+null2;

  $.ajax({
    type: 'POST',
    data: dataString2,
    url: 'admin/helper/serv-helper.php',
    success:function(data) {
      $("#all_msg").html(data);
      $("#becomHelper_msg").html(data);
      $("#becomHelperBtn").hide();
      $("#needHelpv1_msg").hide();
      $("#needHelpv2_msg").show();
    }
  });
});  

// Ajax request for fetching data periodically (e.g., Needers, Helpers, Suppliers)
(function fetchData(url, elementClass) {
  $.ajax({
    url: url, 
    success: function(data) {
      $(elementClass).html(data);
    },
    complete: function() {
      setTimeout(function() {
        fetchData(url, elementClass);
      }, 5000);
    }
  });
})('app/needer/fetch-needer.php', '.fetchNeeder');

(function fetchData(url, elementClass) {
  $.ajax({
    url: url, 
    success: function(data) {
      $(elementClass).html(data);
    },
    complete: function() {
      setTimeout(function() {
        fetchData(url, elementClass);
      }, 5000);
    }
  });
})('app/helper/fetch-helper.php', '.fetchHelper');

(function fetchData(url, elementClass) {
  $.ajax({
    url: url, 
    success: function(data) {
      $(elementClass).html(data);
    },
    complete: function() {
      setTimeout(function() {
        fetchData(url, elementClass);
      }, 5000);
    }
  });
})('app/supplier/fetch-supplier.php', '.fetchSupplier');

// Modal functionality for general modal (e.g., myModal)
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
