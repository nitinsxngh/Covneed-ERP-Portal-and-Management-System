
<!DOCTYPE html>
<html>
<head>
	<title>Covneed: Verification</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>

<style type="text/css">
* {
  margin: 0;
  font-family: sans-serif;
}

/* Mobile Responsive */
@media only screen and (max-width: 940px) {
  .registration-con-div-1 {
    height: 100vh;
    width: 100%;
    background-color: #e6e6e6;
  }

  .registration-con-div-1-1 {
    height: 90%;
    width: 100%;
    background-color: #ffffff;
  }

  .registration-con-div-1-2 {
    height: 120px;
    width: 100%;
    background-color: ;
    margin-top: 60px;
    text-align: center;
  }
}

/* Desktop Responsive */
@media only screen and (min-width: 940px) {
  .registration-con-div-1 {
    height: 100vh;
    width: 100%;
    background-color: #e6e6e6;
    justify-content: center;
    align-items: center;
    display: flex;
  }

  .registration-con-div-1-1 {
    height: 400px;
    width: 40%;
    background-color: #ffffff;
  }

  .registration-con-div-1-2 {
    height: 120px;
    width: 100%;
    background-color: ;
    margin-top: 60px;
    text-align: center;
  }
}

</style>
<body>

<?php
 include"../admin/registration/serv-registration.php";
?>

<div class="registration-con-div-1" style="">
  <div class="registration-con-div-1-1" style="">
    <div style="height: 80px; width: 100%; background-color: #607d8b; justify-content: center; display: flex; align-items: center;">
        <h2><span style="color: #ffffff;">Cov<span style="color: red;">need</h2>
    </div>
    <div style="height: 40px; width: 100%; justify-content: center; display: flex; align-items: center;">
      <span style="font-size: 13.5px;"><?php include'../errors/errors.php'; ?></span>  
    </div>
  	<div class="registration-con-div-1-2" style="">
      <div style="height: 35px; width: 100%; text-align: center;">
        <span style="font-size: 13.5px; font-weight: bold; color: #8a8a8a;">Enter your Phone Number*</span>
      </div>
  		<form method="post" action="">
  		 <input id="phone" type="text" name="phone" placeholder="Phone Number" maxlength="15" style="text-align: center; margin: 15px auto; padding: 4px;">
  		 <br>
         <input type="submit" name="register" value="Register" style="padding: 5px; margin: 10px auto; background-color: #ff1f1f; color: #ffffff;">
        </form>		
  	</div>
 </div>	
</div>
</body>
</html>

<script type="text/javascript">
  // Restricts input for the set of matched elements to the given inputFilter function.
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));
</script>

<script type="text/javascript">
  $(document).ready(function() {
  $("#phone").inputFilter(function(value) {
    return /^\d*$/.test(value);    // Allow digits only, using a RegExp
  });
});
</script>
