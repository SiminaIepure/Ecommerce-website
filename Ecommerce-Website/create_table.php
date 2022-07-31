<?php
include 'connect.php';
global $link;

// Creaza tabele
$sql = 'CREATE TABLE cart(
  user_id INT(11),
  product_id INT(11),
  status TINYINT(1),
  bought_quantity INT(11)
)';

$sql = 'CREATE TABLE categorie(
  id INT(20) AUTO_INCREMENT PRIMARY KEY UNIQUE,
  category VARCHAR(30)
)'; 

$pdc = 'CREATE TABLE products (
 id INT(20) AUTO_INCREMENT PRIMARY KEY UNIQUE,
name VARCHAR(100),
price INT(100),
quantity INT(100),
category_id INT(100)
)';
 
 $rls='CREATE TABLE roles (
  id INT(20) AUTO_INCREMENT PRIMARY KEY UNIQUE,
  role VARCHAR(100)
  )';

$usr = 'CREATE TABLE users (
  id INT(20) AUTO_INCREMENT PRIMARY KEY UNIQUE,
  Name VARCHAR(100),
  Email VACHAR(100),
  Password VARCHAR(100),
  Role_id INT(100)
  )';


if (mysqli_query($link, $sql, $pdc, $rls, $usr)) {
  echo 'Table created successfully.';
} else {
  echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);
}

// Inchidere conexiune
mysqli_close($link);
?>

