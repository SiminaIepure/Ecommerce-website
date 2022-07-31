<?php
    require 'connect.php';

    // Se inserează datele
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['buton'])){
    
            $password = password_hash($_POST['parola'], PASSWORD_DEFAULT);
            // Folosim funcția password_hash() pentru a cripta parola

            $sql = "INSERT INTO utilizatori (prenume, nume, email, parola, id_rol) VALUES ('$first_name', '$last_name', '$email', '$password', '2')";
            $result = mysqli_query($link, $sql);
            if($result){
                $errors['result'] = "Contul a fost creat cu succes!";
                header("Location: ./login_page.php?". http_build_query($errors));
            }
            else{
                $errors['result'] = "A apărut o eroare. Încercați mai târziu.";
                header("Location: ./signup_page.php?". http_build_query($errors));
            }
        }
    

    
    // Închidere conexiune
    mysqli_close($link);
    header("Location: ./index.php");
?>