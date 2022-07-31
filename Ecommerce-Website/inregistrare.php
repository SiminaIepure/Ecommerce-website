<?php
 require 'header.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formular</title>
  <link rel="stylesheet" href="inregistrare.css">
   
</head>
<body>
  <div class="login__body">
  <form action="process.php" class="form" method="post" enctype="multipart/form-data">
    <div class="form__field">
      <label class="form__label" for="prenume">Prenume</label>
      <input class="form__input" type="text" name="first_name" id="prenume" placeholder="Prenume">
    </div>
    <div class="form__field">
      <label class="form__label" for="nume">Nume</label>
      <input class="form__input" type="text" name="last_name" id="nume" placeholder="Nume">
    </div>
    <div class="form__field">
      <label class="form__label" for="email">E-mail</label>
      <input class="form__input"  name="email" type="email" id="email" placeholder="E-mail">
    </div>
    <div class="form__field">
      <label class="form__label" for="parola">Parola</label>
      <input class="form__input"  name="password" type="password" id="parola" placeholder="Parola">
    <button type="submit" class="form__button">Trimite</button>
    <button type="reset" class="form__button">Sterge</button>
  </form>
</div>
</body>
</html>

 