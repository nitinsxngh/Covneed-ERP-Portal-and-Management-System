<?php 
include'../../connection/connection.php';
session_start();
$session_user_code = $_SESSION["user_code"];
?>

<?php
$type = 'helper';
$sql = "UPDATE registration SET type='$type' WHERE user_code = '$session_user_code'";

if (mysqli_query($conn, $sql)) {
?>
 <i style="font-size: 44px;" class="fa fa-users" aria-hidden="true"></i>
 <br>
 <a href="volunteer/c-panel.php">C-Panel</a>
<?php
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>