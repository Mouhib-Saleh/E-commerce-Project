<?php
session_start();
require 'includes/conn.php';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BlueWhale</title>
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
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3"><strong>YOUR MOST TRUSTED STORE&nbsp;</strong><br></span>				<div class="caption v-middle text-center">
                    
    
                 <?php    if(isset($_SESSION['userid']) ) {    ?>
    
                        <h1 class="cd-headline clip">
			            <span class="blc"><?php echo $_SESSION['userid']?>| </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">Welcome.</b>
			              <b>Bienvenu.</b>
			            </span>
                      </h1>
                      <?php } ?> 

                      <?php    if(!isset($_SESSION['userid']) ) {  ?>
    
    <h1 class="cd-headline clip">
    <span class="blc">BLUE WHALE| </span>
    <span class="cd-words-wrapper">
      <b class="is-visible">ELECTRONICS.</b>
      <b>SHOP.</b>
    </span>
  </h1>
  <?php } ?>     




				</div></h1>
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
    <div class="container-fluid">
        <div class="modal fade" role="dialog" tabindex="-1" id="signup">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form     action="includes/login.php"  method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" name="login" type="text" required placeholder="login">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" name="mdp" required placeholder="Password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-lg text-white" style="width: 100%;"name="submit" type="submit">Log in</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        
                        <p class="text-center">Don't have an account? &nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signin" href="#">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="signin" >
            <div class="modal-dialog modal-l modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up Now</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                    <form action="includes/adduser.php" method="POST">
                                    <div class="form-group row">
                                       <label for="cin" class="col-sm-4 col-form-label">Login</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="login" name="login" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="cin" class="col-sm-4 col-form-label">CIN</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="cin" name="cin" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="cin" class="col-sm-4 col-form-label">Nom</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="nom" name="nom" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="cin" class="col-sm-4 col-form-label">Prenom</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="pre" name="pre" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="cin" class="col-sm-4 col-form-label">Télephone</label>
                                       <div class="col-sm-8">
                                          <input type="tel" class="form-control" id="tel" name="tel" required>
                                       </div>
                                    </div>
                                    <fieldset class="form-group">
                                       <div class="row">
                                          <legend class="col-form-label col-sm-4 pt-0">Sexe</legend>
                                          <div class="col-sm-1">
                                             <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sexe" value="h" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                Homme
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="radio" name="sexe" value="f">
                                                <label class="form-check-label" for="gridRadios2">
                                                Femme
                                                </label>
                                             </div>
                                          </div>
                                    </fieldset>
                                    <div class="form-row">
                                    <label for="cin" class="col-sm-4 col-form-label">Adresse</label>&nbsp;
                                    <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Adresse" name="adr" required>
                                    </div>
                                    <div class="col-2">
                                    <input type="text" class="form-control" placeholder="Ville" name="ville" required>
                                    </div>
                                    <div class="col">
                                    <input type="text" class="form-control" placeholder="Code Postale" name="cp" required>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                    <label for="mdp1" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="mdp1" class="col-sm-4 col-form-label">Mot de passe</label>
                                    <div class="col-sm-8">
                                    <input type="password" class="form-control" id="mdp" name="mdp" pattern=".{6,}" title="mot de passe doit contenir plus que 5 caractères" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="mdp2" class="col-sm-4 col-form-label">Confirmer votre mot de passe</label>
                                    <div class="col-sm-8">
                                    <input type="password" class="form-control" id="mdp2" name="mdp2" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-6"></div>
                                    <button type="submit" name="submit"  class="btn btn-primary">Créer votre compte</button>
                                    </div>
                                 </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Already have an Account?&nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signup" href="#">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="modal fade" role="dialog" tabindex="-1" id="signup">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="email" required="" placeholder="Email">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-lg text-white" style="width: 100%;" type="button">Log in</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Or&nbsp;<a class="text-decoration-none" href="#">Forget password</a></p>
                        <p class="text-center">Don't have an account? &nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signin" href="#">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="signin">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up Now</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center"><button class="btn btn-primary text-left" style="width: 100%;" type="button"><i class="fa fa-facebook"></i>&nbsp; Continue with Facebook</button></div>
                        <div class="text-center mt-2"><button class="btn btn-light text-left border-dark" style="width: 100%;" type="button"><i class="fa fa-google"></i>&nbsp; Continue with Google</button></div>
                        <form class="mt-4">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-user-o"></i></span></div><input class="form-control" type="text" required="" placeholder="Full Name">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-envelope-o"></i></span></div><input class="form-control" type="email" required="" placeholder="Email">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="text-primary input-group-text"><i class="fa fa-lock"></i></span></div><input class="form-control" type="password" required="" placeholder="Password">
                                    <div class="input-group-append"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" required="" checked=""><label class="form-check-label" for="formCheck-1">I agree all the terms and conditions.</label></div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-lg text-white" style="width: 100%;" type="button">Sign Up</button></div>
                        </form>
                        <hr style="background-color: #bababa;">
                        <p class="text-center">Already have an Account?&nbsp;<a class="text-decoration-none" data-dismiss="modal" data-toggle="modal" data-target="#signup" href="#">Log In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="page-section clearfix">
        <div class="container">
            <div class="intro"><img class="img-fluid intro-img mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" style="text-shadow: 0px 0px 0px;filter: blur(0px);box-shadow: 0px 0px 20px 1px var(--blue), 0px 0px;">
                <div class="intro-text left-0 text-centerfaded p-5 rounded bg-faded text-center">
                    <h2 class="section-heading mb-4"><span class="section-heading-upper">High Quality</span><span class="section-heading-lower">Worth Buying</span></h2>
                    <p class="mb-3">Every Equipment of our quality modern Assets starts with locally sourced, hand picked best brand equipments. Once you try it, our product will be a blissful addition to your everyday morning routine - we guarantee it!</p>
                    <div class="mx-auto intro-button"><a class="btn btn-primary d-inline-block mx-auto btn-xl" role="button" href="#">Try it out!</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section cta" style="background: rgba(41,44,47,0.72);">				<div class="caption v-middle text-center" >
					<h1 class="cd-headline clip">
			            <span class="blc"style="color:grey">Best | </span>
			            <span class="cd-words-wrapper">
						  <b class="is-visible"style="color: white;">Sellers.</b>
						  <b style="color: white;">Deals.</b>
						  <b style="color: white;">Prices.</b>
			            </span>
	          		</h1>
				</div>
                <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="row product-list">
                        <div class="col-sm-6 col-md-4 product-item">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-12"><a class="product-image" href=""><?php
                                    
                                    $prd=89;
$sql ="SELECT pic
FROM produit
WHERE ID_prod='".$prd."'";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   $img=($row['pic']);
    
   }
echo("<img src='assets/img/$img'>");   ?></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2> <?php $sql ="SELECT Name
FROM produit
WHERE ID_prod=89;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['Name']);
    
   }

?></h2>
                                    </div>
                                </div>
                                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="product-description"></p>
                                        <div class="row">
                                            <div class="col-6">





                                            <div class="text-center"><a class="bs4_modal_trigger" href="index.php?prod=89" style="margin: 7px;font-size: 11px;background: rgb(240,153,17);border-style: none;">BUY NOW!</a>
    <div id="bs4_sngl_cmrce" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">
        <div class="modal-dialog">
            <div class="modal-content"><a class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close" href="#" data-dismiss="modal">close</a>
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="bs4_sngl_cmrce_img">
                            
                        
                        <?php 
$prd=$_GET['prod'];
$sql ="SELECT pic
FROM produit
WHERE ID_prod='".$prd."'";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   $img=($row['pic']);
    
   }
echo("<img src='assets/img/$img'>");
?>
                        
                        
                      </div>
                    </div>
                    <div class="col-12 col-md-7" style="padding-bottom: 30px;">
                        <div class="bs4_sngl_cmrce_txt">
                            <h1><?php 

$sql ="SELECT Name
FROM produit
WHERE ID_prod='".$prd."';";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['Name']);
    
   }

?></h1>
                            <ul>
                                <li><i class="fa fa-star rate-star"></i></li>
                                <li><i class="fa fa-star rate-star"></i></li>
                                <li><i class="fa fa-star rate-star"></i></li>
                                <li><i class="fa fa-star rate-star"></i></li>
                                <li><i class="fa fa-star-half-full rate-star"></i></li>
                            </ul>
                            <h2>$   <?php 

$sql ="SELECT prix
FROM produit
WHERE ID_prod='".$prd."';";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['prix']);
    
   }

?>
</h2>
                            <p class="text-left" style="padding-top: 15px;">
                            
                           <?php $sql ="SELECT Designation
FROM produit
WHERE ID_prod='".$prd."';";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['Designation']);
    
   }
                            
                            ?>
                            
                            
                            </p>
                            <form class="d-xl-flex" action="#" style="padding-top: 15px;">
                                <div class="bs4_form_num" style="padding-top: 15px;"><label>quantity</label><input type="number" class="form-control" min="1" max="20" /></div>
                                <div class="bs4_form_color" style="padding-top: 15px;"><label>colours</label><select class="form-control form-control-sm">
                                        <optgroup label="Pick a color">
                                            <option value="12" selected>red</option>
                                            <option value="13">green</option>
                                            <option value="14">blue</option>
                                        </optgroup>
                                    </select></div>
                           
                            </form>
                        </div>
                        <div class="bs4_form_cmrce_btn" style="padding-left: 20px;"><form method="Post" action="includes/panier1.php" > <input type="text" value="<?php echo($prd); ?>  " name ="id" hidden><?php 
                              if(isset($_SESSION['userid']) ) {    ?> <button class="btn btn-primary d-flex justify-content-start bs4_btn_x_out_shtr" type="submit">ADD TO CART</button><?php }  ?></form>
                        
                 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







                                            </div>
                                            <div class="col-6">
                                                <p class="product-price">$
                                                <?php 

$sql ="SELECT prix
FROM produit
WHERE ID_prod=89;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['prix']);
    
   }

?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 product-item">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-12"><a class="product-image" href="#">
                                        
                                    <?php 

$sql ="SELECT pic
FROM produit
WHERE ID_prod=92;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   $img=($row['pic']);
    
   }
echo("<img src='assets/img/$img'>");
?>
                                    
                                    
                                    
                                    </a></div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2><a href="#">  <?php 

$sql ="SELECT Name
FROM produit
WHERE ID_prod=92;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['Name']);
    
   }

?></a></h2>
                                    </div>
                                </div>
                                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="product-description"></p>
                                        <div class="row">
                                            <div class="col-6">
                                            <div class="text-center"><a class="bs4_modal_trigger" href="index.php?prod=92"  style="margin: 7px;font-size: 11px;background: rgb(240,153,17);border-style: none;">BUY NOW!</a></div>
                                            </div>
                                            <div class="col-6">
                                                <p class="product-price">$
                                                <?php 

$sql ="SELECT prix
FROM produit
WHERE ID_prod=92;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['prix']);
    
   }

?>




                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 product-item">
                            <div class="product-container">
                                <div class="row">
                                    <div class="col-md-12"><a class="product-image" href="#"> <?php 

$sql ="SELECT pic
FROM produit
WHERE ID_prod=97;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   $img=($row['pic']);
    
   }
echo("<img src='assets/img/$img'>");
?></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <h2><a href="#"><?php 

$sql ="SELECT Name
FROM produit
WHERE ID_prod=97;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['Name']);
    
   }

?></a></h2>
                                    </div>
                                </div>
                                <div class="product-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i><a class="small-text" href="#">82 reviews</a></div>
                                <div class="row">
                                    <div class="col-12">
                                        <p class="product-description"></p>
                                        <div class="row">
                                            <div class="col-6">
                                            <div class="text-center"><a class="bs4_modal_trigger" href="index.php?prod=97"  style="margin: 7px;font-size: 11px;background: rgb(240,153,17);border-style: none;">BUY NOW!</a></div>
                                            </div>
                                            <div class="col-6">
                                                <p class="product-price">$
                                                <?php 

$sql ="SELECT prix
FROM produit
WHERE ID_prod=97;";
$selectRes = mysqli_query($conn, $sql);

if( mysqli_num_rows( $selectRes )<>0 ){
    $row = mysqli_fetch_assoc( $selectRes ) ;
   echo($row['prix']);
    
   }

?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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


                                       <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Can't Access</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>
                                             <div class="modal-body">
                                               You need to  <?php echo $_GET['error'] ?>
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
                                        . '$("#myModal").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                     if ($_GET['error']== "CIN_Exists" ){
                                                              
                                      echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#myModal").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                     if ($_GET['error']== "Password_Incorrect" ){
                                                              
                                        echo '<script type="text/javascript">'
                                          . '$( document ).ready(function() {'
                                          . '$("#myModal").modal("show");'
                                          . '});'
                                          . '</script>';
                                   
                                       }
                                       if ($_GET['error']== "User_Details_Incorrect" ){
                                                              
                                        echo '<script type="text/javascript">'
                                          . '$( document ).ready(function() {'
                                          . '$("#myModal").modal("show");'
                                          . '});'
                                          . '</script>';
                                   
                                       }
                                       if ($_GET['error']== "You_Are_Not_An_Admin" ){
                                                              
                                        echo '<script type="text/javascript">'
                                          . '$( document ).ready(function() {'
                                          . '$("#myModal").modal("show");'
                                          . '});'
                                          . '</script>';
                                   
                                       }
                                       else if ($_GET['error']== "logIn" ){
                                        

                                        echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#myModal2").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     }
                                    
                                    }
                                    
                                    if (isset($_GET['success'])){
                                     
                                      if ($_GET['success']== "Utilisateur_Creer" ){
                                         
                                     
                                       echo '<script type="text/javascript">'
                                         . '$( document ).ready(function() {'
                                         . '$("#myModal").modal("show");'
                                         . '});'
                                         . '</script>';
                                  
                                      }
                                    
                                     
                                     }
                                    ?>




<?php
                                    if (isset($_GET['prod'])){
                                     
                                     
                                        
                                                            
                                      echo '<script type="text/javascript">'
                                        . '$( document ).ready(function() {'
                                        . '$("#bs4_sngl_cmrce").modal("show");'
                                        . '});'
                                        . '</script>';
                                 
                                     } 
                                  
       ?>     
              
            
    <footer style="width: 100%;padding: 1%;height: 166px;">
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation" style="text-align: left;">
                <h3 style="text-align: center;"><a href="#" style="text-align: center;">Blue<span style="text-align: center;">Whale</span></a></h3>
                <p class="links" style="font-size: 10px;text-align: center;"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name" style="font-size: 10px;text-align: center;">BlueWhale Elctronics © 2020</p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div></div>
                <div>
                    <p class="footer-center-info email text-left"></p>
                </div>
                <div style="text-align: center;">
                    <p> </p>
                    <p class="lead text-center text-white-50" style="font-family: Cookie, cursive;font-size: 18px;text-align: center;">Designed by: &nbsp;<br>Slaeh Mouhib</p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about" style="padding: 0;">
                <h4 style="text-align: center;">About Us</h4>
                <p style="text-align: center;"> The most trusted E-shop in tunisia</p>
                <div class="social-links social-icons" style="text-align: center;"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
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







