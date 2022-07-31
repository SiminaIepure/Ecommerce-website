<?php
 require 'header.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1.0">
    <link rel="stylesheet" href="Produse.css">
    
</head>
<body>
  <div class="produse">
    <?php
        
        include 'connect.php';
      
      
        // Selectam toate informatiile despre produse
        $sql = "SELECT * FROM products";
        
        if ($result = mysqli_query($link, $sql)) 
        {
          if (mysqli_num_rows($result) > 0) 
          {
            while ($row = mysqli_fetch_array($result))
            {
               echo ' <div class="produs"> 
               <p> '.$row['name']. '</p> ' ;
               echo "<img src=".$row['Imagine']." alt=\"poza\"><br>";
        
        echo "Pretul este:".$row['price']."<br>";
        echo "In stoc:".$row['quantity']."<br>";
        if($row['quantity']>0)
        {
          echo '<form action="inserare.php" method="post" enctype="multipart/form-data">
          <input   name="id" type="hidden"  value="'.$row['id'].'">
          <input   name="cant_disp" type="hidden"  value="'.$row['quantity'].'">
          <input name="sel_cantitate" type="number" value="1">
          <button type="submit" class="btn"  >Add to cart</button>
          
          </form>';
          
        }
        echo" </div>";
       
}
            

          }
        }
        
        /* Inchidere conexiune */
        mysqli_close($link);
        ?>
         </div>
        

</body> 
</html>
<?php
 require 'footer.php';
 ?>