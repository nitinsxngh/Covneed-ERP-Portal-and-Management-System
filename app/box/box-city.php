<div style="height: 180px; width: 100%; padding-top: 20px;">
<input id="city" type="text" name="city" placeholder="City" style="padding: 2.5px; margin: 10px;">
<input id="status2" type="hidden" name="" value="2">
<br>
<button id="cityBtn" class="cityBtn" style="cursor: pointer; margin: 40px auto; background-color: #ff1f1f; padding: 4px 8px; color: #ffffff;">Next</button>
<span id="pop_msg"></span>
</div>


<script type="text/javascript">

  $(".cityBtn").click(function(e) {
        e.preventDefault();
        var city = $("#city").val(); 
        var status2 = $("#status2").val();
        var dataString4 = 'city='+city+'&status2='+status2;

            if($('#city').val() == ''){

            }else{
                    $.ajax({
                    type: 'POST',
                    data: dataString4,
                    url: 'admin/box/serv-box-city.php',
                    success:function(data) {
                    $("#all_msg").html(data);
                    $("#pop_msg").html(data);
                    $("#box-1").hide();
                    $("#box-2").hide();
                    $("#box-3").show('2000');
                    setTimeout(function() { $("#locationModalCon").show(); }, 1000);
                  //  setTimeout(function() { $("#all_msg").hide(); }, 4000);
                    }
                   });
          }
});  

</script>