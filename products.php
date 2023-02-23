
<?php
   session_start();
   require 'includes/conn.php';



 
   ?>
   
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Products - Brand</title>
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
      <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3"><strong>YOUR MOST TRUSTED STORE&nbsp;</strong><br></span><span class="site-heading-lower">BLUE WHALE ELECTRONICS<br></span></h1>
      <nav class="navbar navbar-light navbar-light navbar-light navbar-light navbar-light navbar-dark navbar-expand-md fixed-top text-white bg-dark text-left navigation-clean-search">
         <div class="container">
            <div class="container">
               <div class="container">
                  <div class="container">
                     <div class="container">
                        <div class="container">
                           <a class="navbar-brand" href="index.php">BlueWhale</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                           <div class="collapse navbar-collapse" id="navcol-1">
                              <ul class="nav navbar-nav"></ul>
                              <form class="form-inline form-inline form-inline form-inline form-inline form-inline mr-auto" target="_self">
                                 <?php   if(isset($_SESSION['userid']) ) {  if ( $_SESSION['accessLevel']!='admin') { ?> <div class="form-group"><label for="search-field"></label><a href="index.php" style="border-color: rgb(13,12,12);">Home</a><a href="about.php">About us</a><?php } }?><i class="fas fa-search float-left search-icon"></i><input class="form-control float-left float-sm-right custom-search-input" type="search" placeholder="Type to filter by address" style="border-style: none;background: rgba(255,255,255,0.41);border-radius: 48px;color: black;font-family: sans-serif;margin: 0px;"></div>
                              </form>
                              <div class="float-left float-md-right mt-5 mt-md-0 search-area"></div>
                              <?php 
                 if(isset($_SESSION['userid']) ) {  
                    
                  if ( $_SESSION['accessLevel']!='admin')
                  {
                    
                    
                    ?>           <button class="btn btn-secondary btn-sm" style="background: rgb(255,255,255);color: rgb(0,0,0);box-shadow: 0px 0px 18px;" data-toggle="modal" data-target="#pay">Checkout!</button>
                              <div class="dropdown-container">
                                 <button class="btn btn-primary dropdown-toggle btn-sm ml-1" data-toggle="dropdown" type="button" aria-expanded="true"><span class="badge badge-pill badge-light">

<?php  

²


?>



                                 </span><i class="fa fa-shopping-cart mx-2"></i>$
                                 <?php  

$i=0;
if (isset($_COOKIE['produits'])){
   $s=0;
   foreach($_COOKIE['produits'] as $_name=> $_val ){
      $sql= "Select * From produit Where ID_prod='".$_val."'";
      $selectResi = mysqli_query( $conn,$sql );
    

      $sqlu ="SELECT*
      FROM produit
      WHERE ID_prod='".$_val."';";
      $selectRes = mysqli_query($conn, $sqlu);
      if( mysqli_num_rows( $selectRes )<>0 ){
      $row = mysqli_fetch_assoc( $selectRes );
      $s=intval($s)+intval($row['Prix']);
      }
       
   }echo("$s"); }

?>
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 <span class="caret"></span></button>
                                 <ul role="menu" class="dropdown-menu" style="left:auto;">

                                    <?php  

                               if (isset($_COOKIE['produits']))
                               {
                                  
                                   foreach($_COOKIE['produits'] as $_name=> $_val ){
                                   $sql= "Select * From produit Where ID_prod='".$_val."'";
                                   $selectResi = mysqli_query( $conn,$sql );
                                 

                                   $sqlu ="SELECT*
                                   FROM produit
                                   WHERE ID_prod='".$_val."';";
                                   $selectRes = mysqli_query($conn, $sqlu);
                                   if( mysqli_num_rows( $selectRes )<>0 ){
                                   $row = mysqli_fetch_assoc( $selectRes );
                                   
                                   echo('<li class="p-2 text-nowrap text-left"><span class="badge badge-pill badge-warning align-text-top mr-1 mt-1">#</span>item: '.$row["Name"].' <strong>/   price: $'.$row["Prix"].'</strong><a href="includes/det.php?id='.$_val.'" class="badge badge-danger text-white">-</a></li>');
                                   }
                               }}





                                   
                                   
                               
                               
                               
                               
                               
                               ?>
                               
                               <?php }} ?>
                               
                                </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </nav>
      
            
                <div class="col-xl-9 mx-auto">
      <div class="row product-list">
         <div class="col">
            
               <div class="row">
                  <div class="col-xl-9 mx-auto">
                     <div class="row product-list">
                        <?php
                           $sql = "SELECT *
                           FROM produit";
                           $selectRes = mysqli_query( $conn,$sql );
                           if( mysqli_num_rows( $selectRes )<>0 ){
                           while( $row = mysqli_fetch_assoc( $selectRes ) ){
                           echo" 
                           <div class='col-l-6 col-md-4 product-item'>
                              <div class='product-container'>
                                 <div class='row'>
                                    <div class='col-md-12'><a class='product-image' href='#'>
                                       <img src='assets/img/$row[pic]'>
                                       </a>
                                    </div>
                                 </div>
                                 <div class='row'>
                                    <div class='col-8'>
                                       <h2><a href='#'>$row[Name]</a></h2>
                                    </div>
                                 </div>
                                 <div class='product-rating'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-half'></i><a class='small-text' href='#'>82 reviews</a></div>
                                 <div class='row'>
                                    <div class='col-12'>
                                       <p class='product-description'></p>
                                       <div class='row'>
                                          <div class='col-6'>
                                          
                                             <div class='text-center'><a class='bs4_modal_trigger' href='products.php?prod=$row[ID_prod]' style='margin: 7px;font-size: 11px;background: rgb(240,153,17);border-style: none;'>BUY NOW!</a></div>
                                          </div>
                                          <div class='col-6'>
                                             <p class='product-price'>$$row[Prix]
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                             
                                   ";
                             }  }  
                           
                           
                           
                           
                           
                           ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="bs4_sngl_cmrce" class="modal fade bs4_modal bs4_blue bs4_bg_white bs4_bd_black bs4_bd_semi_trnsp bs4_none_radius bs4_shadow_none bs4_center bs4_animate bs4FadeInDown bs4_duration_md bs4_easeOutQuint bs4_size_sngl_cmrce" role="dialog" data-modal-backdrop="true" data-show-on="click" data-modal-delay="false" data-modal-duration="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <a class="bs4_btn_x_out_shtr bs4_sngl_cmrce_close" href="#" data-dismiss="modal">close</a>
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
                              
                              ?></h2>
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
                              <div class="bs4_form_color" style="padding-top: 15px;">
                                 <label>colours</label>
                                 <select class="form-control form-control-sm">
                                    <optgroup label="Pick a color">
                                       <option value="12" selected>red</option>
                                       <option value="13">green</option>
                                       <option value="14">blue</option>
                                    </optgroup>
                                 </select>
                              </div>
                           </form>
                        </div>
                        <div class="bs4_form_cmrce_btn" style="padding-left: 20px;"><form method="Post" action="includes/panier.php" > <input type="text" value="<?php echo($prd); ?>  " name ="id" hidden>  <?php 
                              if(isset($_SESSION['userid']) ) { 
                                 
                                 if ( $_SESSION['accessLevel']!='admin')
                                 {
                                 
                                 ?> <button class="btn btn-primary d-flex justify-content-start bs4_btn_x_out_shtr" type="submit">ADD TO CART</button><?php } } ?> </form>
                         
                          
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
      <?php
         if (isset($_GET['prod'])){
          
          
             
                                 
           echo '<script type="text/javascript">'
             . '$( document ).ready(function() {'
             . '$("#bs4_sngl_cmrce").modal("show");'
             . '});'
             . '</script>';
         
          } 
         
         ?>   
         </div></div> 
      </section>
      <section class="page-section"></section>



     








      <div class="modal fade" role="dialog" tabindex="-1" id="pay">
   <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="row .payment-dialog-row">
            <div class="card credit-card-box">
               <div class="card-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>     
                  <h3><span class="panel-title-text">Payment Details </span><img class="img-fluid panel-title-image" src="assets/img/accepted_cards.png" /></h3>
               </div>
               <div class="card-body">
                  <form id="payment-form" action="includes/pay.php" method="POST">
                     <div class="form-row">
                        <div class="col-12">
                           <div class="form-group">
                              <label for="cardNumber">Card number </label>
                              <div class="input-group">
                                 <input type="tel" class="form-control" id="cardNumber" required placeholder="Valid Card Number" />
                                 <div class="input-group-append"><span class="input-group-text"><i class="fa fa-credit-card"></i></span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-7">
                           <div class="form-group"><label for="cardExpiry"><span>expiration </span><span>EXP </span> date</label><input type="tel" class="form-control" id="cardExpiry" required placeholder="MM / YY" /></div>
                        </div>
                        <div class="col-5 pull-right">
                           <div class="form-group"><label for="cardCVC">cv code</label><input type="tel" class="form-control" id="cardCVC" required placeholder="CVC" /></div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-12">
                           <div class="form-group"><label for="couponCode">Total Value</label><p class="text-left"class="form-control" id="couponCode">$<?php  

$i=0;
if (isset($_COOKIE['produits'])){
   $s=0;
   foreach($_COOKIE['produits'] as $_name=> $_val ){
      $sql= "Select * From produit Where ID_prod='".$_val."'";
      $selectResi = mysqli_query( $conn,$sql );
    

      $sqlu ="SELECT*
      FROM produit
      WHERE ID_prod='".$_val."';";
      $selectRes = mysqli_query($conn, $sqlu);
      if( mysqli_num_rows( $selectRes )<>0 ){
      $row = mysqli_fetch_assoc( $selectRes );
      $s=intval($s)+intval($row['Prix']);
      }
       
   }echo("$s"); }

?>
                                    </p></div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="col-12">  <button class="btn btn-primary btn-block btn-lg" type="submit" name="submit">Confirm Purchase</button></div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <hr style="background-color: #bababa;">
   </div>
</div>
</div>
</div>

</div>







<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                           <div class="modal-content">
                                             <div class="modal-header">
                                               <h5 class="modal-title" id="exampleModalLongTitle">Purchase successful</h5>
                                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                 <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>
                                             <div class="modal-body">
                                               Congratulations  <?php echo $_GET['success'] ?>
                                             </div>
                                             <div class="modal-footer">
                                               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             
                                             </div>
                                           </div>
                                         </div>
                                       </div>   












<?php 
if (isset($_GET['success'])){
                                     
   if ($_GET['success']== "Commande passer avec succes" ){
      
  
    echo '<script type="text/javascript">'
      . '$( document ).ready(function() {'
      . '$("#myModal2").modal("show");'
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







