<?php 
include'../../connection/connection.php';
session_start();
$session_user_code = $_SESSION["user_code"];
?>
<?php

$first_name = $_POST['first_name'];
$status1 = $_POST['status1'];



$firstNameSql = "UPDATE registration SET first_name='$first_name', profile_status = '$status1' WHERE user_code = '$session_user_code'";

if (mysqli_query($conn, $firstNameSql)) {
  // echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>