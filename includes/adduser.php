<?php

 
if (isset($_POST['submit']))
{
  require 'conn.php';

  $cin = $_POST['cin'];
  $login = $_POST['login'];
  $mdp = $_POST['mdp'];
  $nom = $_POST['nom'];
  $pre = $_POST['pre'];
  $tel = $_POST['tel'];
  $sexe = $_POST['sexe'];
  $adr = $_POST['adr'];
  $ville = $_POST['ville'];
  $cp = $_POST['cp'];
  $email = $_POST['email'];
  

 $sql = "SELECT * FROM utilisateur WHERE Log_in='$login'";
 $selectRes = mysqli_query($conn, $sql);
 if( mysqli_num_rows( $selectRes )<>0 ){
    header("Location: ../index.php?error=User_Exists");
    exit();
   }

   $sql = "SELECT * FROM utilisateur WHERE CIN_user='$cin'";
   $selectRes = mysqli_query($conn, $sql);
   if( mysqli_num_rows( $selectRes )<>0 ){
      header("Location: ../index.php?error=CIN_Exists");
      exit();
     }



 
     else 
{
   
    
   $sql = "INSERT INTO utilisateur(CIN_user,Log_in,Mot_Pass,Nom,Prenom,Telphone,Sexe,Email,Adresse,Ville,Code_Postal,Rôle) VALUES 
   ('$cin','$login','$mdp','$nom','$pre','$tel','$sexe','$email','$adr','$ville','$cp','user');";
        mysqli_query($conn, $sql);
        header("Location: ../index.php?success=Utilisateur_Creer"); 
}
}




  else
  {
     header("Location: ../index.php");
     exit();
  }
 
  
  ?>