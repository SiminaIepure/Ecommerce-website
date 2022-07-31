<?php 
session-start();
session_destroy();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add to cart']))
    {
        if(isset(S_SESSION['cart']))
        { 
            $myitemps=array_column($_SESSION['cart'], 'id');
            if(in_array($_POST['id'],$myitems))
            {
                eho"<script>
                alert('Item Already Added');
                window.location.href='Produse.php';
                </scrip>";
            }
          $count=count($_SESSION['cart']);
          $_SESSION['cart'][$count]=array('id'=>$_POST['id'],'id'=>$_POST['id'],'quantity'=>1);
          eho"<script>
          alert('Item Added');
          window.location.href='Produse.php';
          </script> ";
        }
       else
       {
          $_SESSION['cart'][0]=array('id'=>$_POST['id'],'id'=>$_POST['cant_dis'],'quantity'=>1);
         eho"<script>
         alert('Item Added');
         window.location.href='Produse.php';
         </script>";
       }
    }
}