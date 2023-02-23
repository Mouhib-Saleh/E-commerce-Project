<?php

session_start(); 
session_unset();
session_destroy();
foreach($_COOKIE['produits'] as $name=> $_val ){
    $sql = "INSERT INTO commande(CIN_user,ID_prod,Date_commande   ) VALUES 
('$cin','$_val','$d');";
    mysqli_query($conn, $sql);
    setcookie("produits[".$name."]",'',time()+3600,"/");
   
  }
header("Location: ../index.php");





?>