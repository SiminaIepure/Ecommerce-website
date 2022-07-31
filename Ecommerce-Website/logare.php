<?php
    include 'connect.php';
    
    // global $link;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = filter_var( $email, FILTER_SANITIZE_EMAIL );//pentru simboluri
    $password = filter_var( $password, FILTER_SANITIZE_STRING );
    
    // log in
    $sql = "SELECT `id`,`nume`,`email`,`password`,`role_id` FROM users WHERE email = '$email' ";
    if($result = mysqli_query($link, $sql)) 
        if(mysqli_num_rows($result) ===1) //daca e un singur user
           
        $row = mysqli_fetch_assoc($result);
            while ($row = mysqli_fetch_array($result)){
                $hash = $row['password'];
                if (password_verify($password, $hash)){
                    session_start();
            
                $_SESSION['user_id'] = $row['id'];//se salveaza
                $_SESSION['user_name'] = $row['nume'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_password'] = $row['password'];
                $_SESSION['user_role'] = $row['role_id'];
                header('Location: index.php');}
                
             else {
                header('Location: login.php');
                echo "Userul nu exista";
            }
        } else {
            header('Location: login.php');
            echo "Userul nu exista";
        }
     else {
        echo "Eroare: " . mysqli_error($link);
    }
    
    mysqli_close($link);
    ?>