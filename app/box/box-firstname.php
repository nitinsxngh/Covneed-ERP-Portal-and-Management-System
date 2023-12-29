<div style="height: 180px; width: 100%; padding-top: 20px;">
  <input id="first_name" type="text" name="first_name" placeholder="First Name" style="padding: 2.5px; margin: 10px;">
  <input id="status1" type="hidden" name="" value="1">
  <br>
  <button id="firstnameBtn" class="firstnameBtn" style="cursor: pointer; margin: 40px auto; background-color: #ff1f1f; padding: 4px 8px; color: #ffffff;">Next</button>
  <span id="pop_msg"></span>  
</div>

<script type="text/javascript">

  $(".firstnameBtn").click(function(e) {
        e.preventDefault();
        var first_name = $("#first_name").val(); 
        var status1 = $("#status1").val();
        var dataString3 = 'first_name='+first_name+'&status1='+status1;

            if($('#first_name').val() == ''){

            }else{

                    $.ajax({
                    type: 'POST',
                    data: dataString3,
                    url: 'admin/box/serv-box-firstname.php',
                    success:function(data) {
                    $("#all_msg").html(data);
                    $("#pop_msg").html(data);
                    $("#box-1").hide();
                    $("#box-2").show('2000');
                    setTimeout(function() { $("#cityModalCon").show(); }, 1000);
                  //  setTimeout(function() { $("#all_msg").hide(); }, 4000);
                    }
                   });

           }         

});  

</script>