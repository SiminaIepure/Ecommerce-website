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
 <h1>ππ πππ£ππ£ πππ€π£ππ π€π</h1>
 <a href="Produse.php" class="buton" >πΊπππ π΅ππ</a>
 <h2>πΉπππ ππ₯π π§ππππ₯!</h2>
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