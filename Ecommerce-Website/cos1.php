<?php include("header.php"); 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charest="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>MY CART</h1>
            </div>
             <div class="tabelp">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                         <th scope="col">Serial No.</th>
                         <th scope="col">Item Number</th>
                         <th scope="col">Item Price</th>
                         <th scope="col">Quantity</th>
                         <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                         <?php 
                         $total=0;

                  if(isset($_SESSION['cart']))
                    {
                         foreach($_SESSION['cart'] as $key=> $value)
                         {
                             $total=$total+$value['cant_disp'];
                            echo"
                        <tr>
                        <td>1</td>
                        <td>$value[id]</td>
                        <td>$value[quantity]</td>
                        <td><input class='text-center' type='number' value='$value'[quantity]' min='1' max='10'</td>
                        <td><button class='btn btn-sm-outine-danger'>REMOVE</button></td>
                        </tr>
                         "; 
                        }
                    }   
                        ?>
                    </tbody>
                </table>
                <div class="total">
                    <h3>Total:</hr>
                    <h5 class="text-center"><?php echo $total ?></h5>
        </div>
     </div>
    </div>
</body>

</html>

