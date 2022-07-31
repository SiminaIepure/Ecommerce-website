<?php
    include 'connect.php';
    session_start();
    if(isset($_SESSION['user_id'])){
            require_once './meniulogat.php';
        
    }
    else{
        require_once './meniu.php';
    }
?>