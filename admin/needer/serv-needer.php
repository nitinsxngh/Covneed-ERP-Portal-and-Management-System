<?php 
include'../../connection/connection.php';
session_start();
$session_user_code = $_SESSION["user_code"];
?>

<?php
function generateRandomString1($length = 10) {
    $characters = 'abcdefghijklmnopqurstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $post_code = generateRandomString1();

$sql = "SELECT * FROM registration WHERE user_code = '$session_user_code'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $username = $row["username"];
    $first_name = $row["first_name"]; 
    $phone = $row["phone"];
?>

<?php
    }
} else {
    echo "Error!";
}
?>


<?php
$post_time=date("Y-m-d H:i:s");
$title = $_POST['title'];
$description = $_POST['description'];
$status = 'New';
 $query = "INSERT INTO needers (post_code, user_code, first_name, title, description, phone, post_time, status) VALUES ('$post_code', '$session_user_code', '$first_name', '$title', '$description', '$phone', '$post_time', '$status')";
 mysqli_query($conn, $query);

?>