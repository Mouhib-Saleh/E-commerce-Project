<?php
require 'conn.php';
  session_start();
 
if (isset($_POST['submit']))
{
  require 'conn.php';

  $cin = $_SESSION['cin'];
  $d =date("Y-m-d");

  if (isset($_COOKIE['produits']))
  {
     
      foreach($_COOKIE['produits'] as $name=> $_val ){
        $sql = "INSERT INTO commande(CIN_user,ID_prod,Date_commande   ) VALUES 
   ('$cin','$_val','$d');";
        mysqli_query($conn, $sql);
        setcookie("produits[".$name."]",'',time()+3600,"/");
       
      }
  
      header("Location: ../products.php?success=Commande passer avec succes"); 
  
    }}











