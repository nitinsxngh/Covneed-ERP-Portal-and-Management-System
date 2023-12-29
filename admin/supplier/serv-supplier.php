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
  $supplier_id = generateRandomString1();
?>


<?php
$s_phone_no = $_POST['s_phone_no'];
$s_Address = $_POST['s_Address'];
$s_supplier_of = $_POST["s_supplier_of"];
$verified_by = 'None';
$status = 'New';
$posted_on=date("Y-m-d H:i:s");

 $query = "INSERT INTO supplier (supplier_id, phone_no, address, supplier_of, entered_by, verified_by, status, posted_on) VALUES ('$supplier_id', '$s_phone_no', '$s_Address', '$s_supplier_of', '$session_user_code', '$verified_by', '$status', '$posted_on')";
 mysqli_query($conn, $query);
?>