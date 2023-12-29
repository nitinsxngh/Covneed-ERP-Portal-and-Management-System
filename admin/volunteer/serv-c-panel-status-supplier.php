<?php 
include'../../connection/connection.php';
session_start();

$status = $_POST['status'];
$supplier_id = $_POST['supplier_id'];

?>

<?php
$last_checked=date("Y-m-d H:i:s");

$sql = "UPDATE supplier SET status='$status', last_checked = '$last_checked' WHERE supplier_id = '$supplier_id'";

if (mysqli_query($conn, $sql)) {
   header('Location: ../../volunteer/c-panel.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>