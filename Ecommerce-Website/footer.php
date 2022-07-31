<?php
 require 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="footer.css">

</head>
<body>
   

<footer class="footer">
    
    <div class="footer__nav nav-secondary">
      <div class="nav-secondary__wrapper">
        <ul class="nav-secondary__content clearfix">
          <li class="nav-secondary__item">
            <a href="Despremagazin.php" class="nav-secondary__link">Despre noi</a>
          </li>
          <li class="nav-secondary__item">
            <a href="Contact.php" class="nav-secondary__link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
   
  </footer>

<?php
//session_start();
if(isset($_SESSION['user_name']))
echo $_SESSION['user_name'];
?>


</body>
</html>
