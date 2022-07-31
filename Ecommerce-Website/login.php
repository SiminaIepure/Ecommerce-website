<?php
 require 'header.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body >
  <div class="login_body">
<form action="../procesare_conectare.php" class="middle" method="post" enctype="multipart/form-data">
   
    <div>
      <label class="mail" for="email">E-mail</label>
      <input class="form__input"  name="email" type="email" id="email" placeholder="E-mail">
    </div>
    <div>
      <label class="parola" for="parola">Parola</label>
      <input class="form__input" type="password" name="password" id="password" placeholder="Parola">
    </div>
    <button type="submit" class="btnregister">Trimite</button>
    <button type="reset" class="btnregister">Sterge</button>
  </form>
</div>
</body>
</html

