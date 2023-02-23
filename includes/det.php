<?php
require 'conn.php';




   $id=$_GET['id'];
  
 

       if (isset($_COOKIE['produits'])) {
        foreach ($_COOKIE['produits'] as $name => $value) {
    
           
            $id1= intval($id);
            $value1=intval($value);
            if ( $id1==$value1){
               
                setcookie("produits[".$name."]",'',time()+3600,"/");
                header('Location: ../products.php?removed from panier');
            }
        }
    }

   




        

    






?>