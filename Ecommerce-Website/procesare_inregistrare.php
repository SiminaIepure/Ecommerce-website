<?php
include 'connect.php';
global $link;

$email = $_POST['email'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// Inserare date
$sql = 'INSERT INTO users (Password, email) VALUES ("' . $password . '", "' . $email . '")';
if (mysqli_query($link, $sql)) {
  echo 'Records inserted successfully.';
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}
header("Location: ./index.php");

// Inchidere conexiune
mysqli_close($link);
?>