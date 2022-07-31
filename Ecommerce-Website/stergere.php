<?php
$u_first_name = $_POST['first_name'];
$u_last_name = $_POST['last_name'];
$u_email = $_POST['email'];
$u_password= $_POST['password'];

// Create connection
$conn = mysqli_connect($u_first_name, $u_last_name, $u_email, $u_password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>