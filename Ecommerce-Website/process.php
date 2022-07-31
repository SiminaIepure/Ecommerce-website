<?php
//ia detaliile pe care le pun in formular si le introduce in baza de date
include 'connect.php';
global $link;

$u_first_name = $_POST['first_name'];
$u_last_name = $_POST['last_name'];
$u_email = $_POST['email'];
$u_password= $_POST['password'];

// Inserare date



  $sql = "INSERT INTO users (last_name, Name, Email, Password) VALUES ('  $u_first_name  ', ' $u_last_name ', '  $u_email  ', '  $u_password ')";
  if (mysqli_query($link, $sql)) {
    echo 'Records inserted successfully.';
  } else {
    echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
  }
  header("Location: ./index.php");
// Inchidere conexiune
mysqli_close($link);
?>