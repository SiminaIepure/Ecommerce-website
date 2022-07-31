<?php
include "connect.php";
session_start();
	
	$id_produs=$_POST['id'];
	$utilizator="11";
    $cantitate=$_POST['sel_cantitate'];
    $cant_disp=$_POST['cant_disp'];
    $status = "1";

        $sql = 'INSERT INTO cart(user_id,product_id,status,bought_quantity) VALUES ("'.$utilizator.'","'.$id_produs.'","'.$status.'","'.$cantitate.'")';
		

	if(mysqli_query($link,$sql)){
	    header("Location: Produse.php");
	}
	else
	echo 'ERROR: Could not able to execute ' . $sql . mysqli_error($link);

    
?>