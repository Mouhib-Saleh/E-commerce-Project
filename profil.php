

<?php
session_start();
require 'includes/conn.php';
if(!isset($_SESSION['userid']))
{
    header("Location:index.php?error=logIn");
    exit();
}


?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>About us - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce-1.css">
    <link rel="stylesheet" href="assets/css/Button-modal-ecommerce.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/Modal-commerce-popup-button-1.css">
    <link rel="stylesheet" href="assets/css/Modal-commerce-popup-button.css">
    <link rel="stylesheet" href="assets/css/navbar-shoppingcart-ecommerce.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Product-List.css">
    <link rel="stylesheet" href="assets/css/Search-Input-responsive.css">
    <script src="assets/js/jquery.min.js"></script>
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3">Profil</span><span class="site-heading-lower">				<div class="caption v-middle text-center">
					 <?php    if(isset($_SESSION['userid']) ) {    ?>
    
                        <h1 class="cd-headline clip">
			            <span class="blc"><?php echo $_SESSION['userid']?>| </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">Welcome.</b>
			              <b>Bienvenu.</b>
			            </span>
                      </h1>
                      <?php } ?> 

				</div></span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Brand</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
                       
                    <?php 
                 if(isset($_SESSION['userid']) ) {    ?>
                    <li class="nav-item"><a class="nav-link" href="profil.php">Profile</a></li> <?php } ?>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="row" style="text-align: left;width: 48%;">
                    <div class="col" style="text-align: right;width: 100%;padding: 0px;">   <?php 
                 if(!isset($_SESSION['userid']) ) { 
                     ?><button class="btn btn-outline-primary" data-toggle="modal" data-target="#signup" type="button" style="box-shadow: 0px 0px 6px rgb(3,3,3), 0px 0px 20px;background: #f7f7f7;color: rgb(0,0,0);">Log In</button></div>
                    <div class="col" style="width: 7px;"><button class="btn btn-primary" data-toggle="modal" data-target="#signin" type="button" style="box-shadow: 0px 0px 20px rgb(0,0,0);">Sign Up</button></div><?php } ?> 

                    <?php 
                 if(isset($_SESSION['userid']) ) {    ?>
                 
                 <button class="btn btn-outline-primary"  type="button" onclick="window.location.href='includes/logout.php'" style="box-shadow: 0px 0px 6px rgb(3,3,3), 0px 0px 20px;background: #f7f7f7;color: rgb(0,0,0);">Log out</button>
                 <?php } ?>
                </div>
            </div>
        </div>
    </nav>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content"></div>
        </div>
    </section>


<br>







    <div class="container-fluid">
    <div class="container">
    
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow">
                <?php 
                
$i =$_SESSION['userid1'];
$sql ="SELECT pic
FROM utilisateur
WHERE Log_in='".$i."'";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   $img=($row['pic']);
    
   }
  
echo( "<img class='rounded-circle mb-3 mt-4' src='assets/img/$img.jpg' width='160' height='160' />");
?>
                
                
                
               
               
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button">Change Photo</button></div>
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary font-weight-bold m-0">Projects</h6>
                </div>
                <div class="card-body">
                    <h4 class="small font-weight-bold">Daily Activity<span class="float-right">20%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-danger" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Sales tracking<span class="float-right">40%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-warning" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"><span class="sr-only">40%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Customer Satysfaction<span class="float-right">60%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-primary" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Payout Details<span class="float-right">80%</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-info" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="sr-only">80%</span></div>
                    </div>
                    <h4 class="small font-weight-bold">Account setup<span class="float-right">Complete!</span></h4>
                    <div class="progress progress-sm mb-3">
                        <div class="progress-bar bg-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"><span class="sr-only">100%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
           
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">User Settings</p>
                        </div>
                        <div class="card-body">
                            <form    action="includes/mod.php" method="POST"     >
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="username"><strong>Username</strong></label>
                                        
                                        
                                        <?php 
                
                $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Log_in']);
                    
                   }
                   echo( "<input type='text' class='form-control' required placeholder='$log' name='Log' />");
               
                ?>
                                        
                                        
                                        
                                        
                                        
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label> <?php  $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Email']);
                    
                   }
                   echo( "<input type='email' class='form-control' placeholder='$log' required name='mail' />");
               
                ?></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="first_name"><strong>First Name</strong></label><?php  $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Nom']);
                    
                   }
                   echo( "<input type='text' class='form-control' placeholder='$log' required name='Nom' />");
               
                ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><?php  $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Prenom']);
                    
                   }
                   echo( "<input type='text' class='form-control' placeholder='$log' required name='Prenom' />");
               
                ?></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" name="submit" type="submit">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Contact Settings</p>
                        </div>
                        <div class="card-body">
                            <form  action="includes/mod2.php" method="POST">
                                <div class="form-group"><label for="address"><strong>Address</strong></label><?php  $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Adresse']);
                    
                   }
                   echo( "<input type='text' class='form-control' required placeholder='$log' name='add' />");
               
                ?></div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="city"><strong>City</strong></label><?php  $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Ville']);
                    
                   }
                   echo( "<input type='text' class='form-control' placeholder='$log' required name='ville' />");
               
                ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="country"><strong>ZIP code</strong></label><?php  $i =$_SESSION['userid1'];
                $sql ="SELECT *
                FROM utilisateur
                WHERE Log_in='".$i."'";
                $selectRes = mysqli_query($conn, $sql);
                
                if( mysqli_num_rows( $selectRes )<>0 ){
                    $row = mysqli_fetch_assoc( $selectRes ) ;
                   $log=($row['Code_Postal']);
                    
                   }
                   echo( "<input type='text' class='form-control' placeholder='$log' required name='cp' />");
               
                ?></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" name="submit" type="submit">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow mb-5">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Forum Settings</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group"><label for="signature"><strong>Signature</strong><br /></label><textarea class="form-control" rows="4" name="signature"></textarea></div>
                        <div class="form-group">
                            <div class="custom-control custom-switch"><input type="checkbox" class="custom-control-input" id="formCheck-1" /><label class="custom-control-label" for="formCheck-1"><strong>Notify me about new replies</strong></label></div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





</div>



<div class="modal fade" id="myModali" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle"><?php 
                                               
                                               if (isset($_GET['error'])){
                                               echo "Please Try agin";} 
                                               if (isset($_GET['success'])){
                                                echo "Success";}
                                               ?></h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>
                                             <div class="modal-body">


                                               <?php 
                                               
                                               if (isset($_GET['error'])){
                                               echo $_GET['error'];} 
                                               if (isset($_GET['success'])){
                                                echo $_GET['success'];}
                                               ?>
                                             </div>
                                             <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             
                                             </div>
                                           </div>
                                         </div>
                                       </div>
























<?php
                                    if (isset($_GET['error'])){
                                     
                                     if ($_GET['error']== "User_Exists" ){
                                        
                                                            
                                      echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#myModali").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                    }
                                    if (isset($_GET['success'])){
                                     
                                        if ($_GET['success']== "Utilisateur_Modifier" ){
                                           
                                       
                                         echo '<script type="text/javascript">'
                                           . '$( document ).ready(function() {'
                                           . '$("#myModali").modal("show");'
                                           . '});'
                                           . '</script>';
                                    
                                        }
                                      
                                       
                                       }


                        
                                      ?>


















    <footer class="footer text-faded text-center py-5" style="background: rgb(52,58,64);">
        <div class="container">
            <p class="m-0 small">Copyright&nbsp;©&nbsp;BlueWhale Elctronics 2020</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/Button-modal-ecommerce-1.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/current-day.js"></script>
    <script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
</body>

</html>