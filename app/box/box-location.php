</body>
</html>
<div id="allowLocation_msg" class="allowLocation_msg"></div>

<input id="status3" type="hidden" name="" value="3">
<input id="latitude" type="hidden" value="">
<input id="longitude" type="hidden" value="">
<button class="allowLocationBtnDone" id="allowLocationBtnDone" style="cursor: pointer; margin: 40px auto; background-color: #ff1f1f; padding: 4px 8px; color: #ffffff;">Allow</button>


<script type="text/javascript">

  $(".allowLocationBtnDone").click(function(e) {
        e.preventDefault();
        var latitude = $("#latitude").val(); 
        var longitude = $("#longitude").val();
        var status3 = $("#status3").val();
        var dataString5 = 'latitude='+latitude+'&longitude='+longitude+'&status3='+status3;


                    $.ajax({
                    type: 'POST',
                    data: dataString5,
                    url: 'admin/box/serv-box-location.php',
                    success:function(data) {
                    $("#all_msg").html(data);
                    $("#allowLocation_msg").html(data);
                    $('.modalNeedHelp-pop').hide();

                  //  setTimeout(function() { $("#all_msg").hide(); }, 4000);
                    }
                   });

});  

</script>