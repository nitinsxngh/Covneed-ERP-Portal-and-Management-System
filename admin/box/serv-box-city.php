<?php 
include'../../connection/connection.php';
session_start();
$session_user_code = $_SESSION["user_code"];
?>
<?php

$city = $_POST['city'];
$status2 = $_POST['status2'];


$citysql = "UPDATE registration SET city = '$city', profile_status = '$status2' WHERE user_code = '$session_user_code'";

if (mysqli_query($conn, $citysql)) {
 // echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>