<?php 
include'../../connection/connection.php';
session_start();
$session_user_code = $_SESSION["user_code"];
?>
<?php

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$status3 = $_POST['status3'];


$getLocationSql = "UPDATE registration SET static_latitude='$latitude', static_longitude = '$longitude', profile_status = '$status3' WHERE user_code = '$session_user_code'";

if (mysqli_query($conn, $getLocationSql)) {
 // echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>