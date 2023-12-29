<?php
session_start();
$user_code = "";
$username = "";
$phone = "";
$errors = array();

include'../connection/connection.php';
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
  $user_code = generateRandomString1();
  $username = 'user_'.$user_code;
?>

<?PHP
function validate_phone_number($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}
?>




<?php
if (isset($_POST['register'])) {
  $phone = mysqli_real_escape_string($conn, $_POST['phone']);

if (empty($phone)) {
    array_push($errors, "Phone Number Required*");
}

if (validate_phone_number($phone) !== true) {
    array_push($errors, "Invalid Phone Number");
}

$check = "SELECT * FROM registration WHERE phone = '$phone' LIMIT 1";
$result = mysqli_query($conn, $check);


if (mysqli_num_rows($result) > 0) {

      // Login
      if (count($errors) == 0) {
      $query = "SELECT * FROM registration WHERE phone = $phone";
      $results = mysqli_query($conn, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['phone'] = $phone;
        $_SESSION['success'] = "You are logged in";
            header('location: ../index.php');
           /* default username session */
            $select = mysqli_query($conn, "SELECT user_code FROM registration WHERE phone= $phone");
            $row = mysqli_fetch_array($select);
            $_SESSION['user_code'] = $row['user_code'];

      }
    }


}else{
               // Register
                $type = "needer";
                if (count($errors) == 0) {
                    $query = "INSERT INTO registration (user_code, username, phone, type) VALUES ('$user_code', '$username', '$phone', '$type')";

                     mysqli_query($conn, $query);
                     $_SESSION['user_code'] = $user_code;
                     $_SESSION['phone'] = $phone;
                     $_SESSION['success'] = "Succesfully Registered!";
                     header('location: ../index.php');

             }

}

}

?>