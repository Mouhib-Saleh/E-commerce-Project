<?php



if (isset($_POST['submit']))
{
  require 'conn.php';

  $uid = $_POST['login'];
  $Last = $_POST['mdp'];



  
  
  
      $sql = "SELECT * FROM utilisateur WHERE Log_in='".$uid."'";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$sql)){
          header("Location: ../index.php?error=sqlerr");
          exit();

      }
      else {
          mysqli_stmt_bind_param($stmt,"ss",$uid);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if ($row = mysqli_fetch_assoc($result)){
            $password_hash= password_hash($row['Mot_Pass'], PASSWORD_DEFAULT); 
            $pwdcheck = password_verify($Last, $password_hash);
            if ($pwdcheck==false ){
                header("Location: ../index.php?error=Password_Incorrect");
                
          exit();

            }
            else if ($pwdcheck== true){
               session_start();
               $_SESSION['userid'] = $row['Nom'] ;
               $_SESSION['userid1'] = $row['Log_in'] ;
               $_SESSION['cin'] = $row['CIN_user'];

               $_SESSION['Pass'] = $Last;
               $_SESSION['accessLevel'] = $row['Rôle'];
              
             if ( $_SESSION['accessLevel']=='admin')
             {                
              header("Location: ../Admin.php?login=success");
             }
             else {
               header("Location: ../index.php?login=success");}
          exit();

            }
            else {
                header("Location: ../index.php?error=sqlerr");
          exit();
            }


          }
          else {
            header("Location: ../index.php?error=User_Details_Incorrect");
            exit();
          }

      }
  


}
else {
    header("Location: ../index.php?error=notlogedin");
    exit();
}


?>