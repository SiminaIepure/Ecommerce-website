<?php
  session_start();

  if ( isset($_SESSION['user_id']) ) {//daca variabila de sesiune este setata empty daca este goal 
    include 'meniulogat.php';
  } else {
    include 'meniu.php';
  }
  session_write_close();
?>
