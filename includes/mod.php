

<?php
session_start();
require 'conn.php';

if (isset($_POST['submit']))
{
 
 
  
  $login = $_POST['Log'];
  $nom = $_POST['Nom'];
  $pre = $_POST['Prenom'];
  $email = $_POST['mail'];
  
  $i =$_SESSION['cin'];
 $sql = "SELECT * FROM utilisateur WHERE Log_in='$login'";
 $selectRes = mysqli_query($conn, $sql);
 if( mysqli_num_rows( $selectRes )<>0 ){
    header("Location: ../profil.php?error=User_Exists");
    exit();
   }

     else 
{
   
   $sql = "UPDATE utilisateur SET 
Log_in = '".$login."',
Nom = '".$nom."',
Prenom = '".$pre."',
Email = '".$email."'
WHERE CIN_user = '".$i."' ;";

        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM utilisateur WHERE Log_in='$login'";
        $selectRes = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($selectRes);
        $_SESSION['userid1'] = $row['Log_in'] ;
        $_SESSION['userid'] = $row['Nom'] ;

        header("Location: ../profil.php?success=Utilisateur_Modifier"); 
}
}




 
 
  
  ?>