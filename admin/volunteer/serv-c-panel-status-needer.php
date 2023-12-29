<?php 
include'../../connection/connection.php';
session_start();

$status = $_POST['status'];
$post_code = $_POST['post_code'];

?>

<?php
$sql = "UPDATE needers SET status='$status' WHERE post_code = '$post_code'";

if (mysqli_query($conn, $sql)) {
   header('Location: ../../volunteer/c-panel.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
?>