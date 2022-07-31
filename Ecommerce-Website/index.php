<?php
 require 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <header>
        <?php
            include "meniutype.php";
        ?>
    </header>
   <div class="print-area">   
    <div class="title">
 <h1>𝓛𝓐 𝓟𝓔𝓣𝓘𝓣 𝓑𝓞𝓤𝓣𝓘𝓠𝓤𝓔</h1>
 <a href="Produse.php" class="buton" >𝑺𝒉𝒐𝒑 𝑵𝒐𝒘</a>
 <h2>𝔹𝕚𝕟𝕖 𝕒𝕥𝕚 𝕧𝕖𝕟𝕚𝕥!</h2>
</div>
</div>

<?php
session_start();
if(isset($_SESSION['user_name']))
echo $_SESSION['user_name'];
?>


</body>
</html>

 <?php
 require 'footer.php';
 ?>