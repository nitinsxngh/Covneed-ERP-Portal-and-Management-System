
<?php
session_start();
$session_user_code = $_SESSION['user_code'];
include'../../connection/connection.php';
?>

<?php 
$sql1 = "SELECT * FROM registration WHERE type = 'helper'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    while($row = mysqli_fetch_assoc($result1)) {
    $first_name = $row["first_name"];
    $type = $row["type"];
?>

				<div style="height: 35px; width: 90%; background-color: grey; margin: 10px auto;">
					<div style="height: 35px; width: 50%; background-color: #c9e0ea; float: left; display: flex;">
						<span style="font-size: 13.5px; padding: 10px;"><?php echo $first_name ?></span>
					</div>
					<div style="height: 35px; width: 50%; background-color: #f2f2f2; float: right; display: flex;">
						<span style="font-size: 13.5px; padding: 10px;"><?php echo $type ?></span>
					</div>
				</div>

<?php
    }
} else {
    echo "No Volunteer Found";
}
?>