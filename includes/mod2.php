<?php
session_start();
require 'conn.php';

if (isset($_POST['submit']))
{
 
 
  
  $ville = $_POST['ville'];
  $add = $_POST['add'];
  $zip = $_POST['cp'];
  
  
  $i =$_SESSION['cin'];
 $sqli = "UPDATE utilisateur SET 
Adresse = '".$add."',
Ville = '".$ville."',
Code_Postal = '".$zip."'
WHERE CIN_user = '".$i."' ;";

        mysqli_query($conn, $sqli);
       if($selectRes = mysqli_query($conn, $sqli)){
        header("Location: ../profil.php?success=Utilisateur_Modifier");
       } 
       else {
        header("Location: ../profil.php?error=Sqlrequete");
       }
}

  
  ?>