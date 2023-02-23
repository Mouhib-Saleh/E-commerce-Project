<?php
session_start();
if(!isset($_SESSION['userid']))
{
    header("Location:index.php?error=logIn");
    exit();
}
else if ( $_SESSION['accessLevel']!='admin')
{

    header("Location:index.php?error=You_Are_Not_An_Admin");
    exit();


}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Store - Brand</title>
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
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3"><span class="text-primary site-heading-upper mb-3"><strong>Admin Space</strong><br></span></span><span class="site-heading-lower">				<div class="caption v-middle text-center">
					<h1 class="cd-headline clip">
			            <span class="blc">BLUE WHALE| </span>
			            <span class="cd-words-wrapper">
			              <b class="is-visible">ELECTRONICS.</b>
			              <b>SHOP.</b>
			            </span>
	          		</h1>
				</div></span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded" href="#">Brand</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="Admin.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>

                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="row" style="text-align: left;width: 48%;">
                    <div class="col" style="text-align: right;width: 100%;padding: 0px;">
                    
                    <?php 
                 if(!isset($_SESSION['userid']) ) { 
                     ?><button class="btn btn-outline-primary" data-toggle="modal" data-target="#signup" type="button" style="box-shadow: 0px 0px 6px rgb(3,3,3), 0px 0px 20px;background: #f7f7f7;color: rgb(0,0,0);">Log In</button></div>
                    <div class="col" style="width: 7px;"><button class="btn btn-primary" data-toggle="modal" data-target="#signin" type="button" style="box-shadow: 0px 0px 20px rgb(0,0,0);">Sign Up</button></div><?php } ?> 

                    <?php 
                 if(isset($_SESSION['userid']) ) {    ?>
                 
                 <button class="btn btn-outline-primary"  type="button" onclick="window.location.href='includes/logout.php'" style="box-shadow: 0px 0px 6px rgb(3,3,3), 0px 0px 20px;background: #f7f7f7;color: rgb(0,0,0);">Log out</button>
                 <?php } ?>
                    
                    
                    
            </div>
        </div>
    </nav>
    <section class="page-section cta" style="border-radius: 27px;padding: 41px;margin: 25px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 17px;">Manage Assets</h4>
                            <div class="row">
                                <div class="col" style="text-align: center;"><i class="fa fa-laptop" style="text-align: center;font-size: 59px;"></i>
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary" onclick="window.location.href='assets.php'" type="button">Visit</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 17px;">Manage Users</h4>
                            <div class="row">
                                <div class="col" style="text-align: center;"><i class="fa fa-users" style="text-align: center;font-size: 59px;"></i>
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary"onclick="window.location.href='clients.php'" type="button">Visit</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="text-align: center;font-size: 17px;">Manage Purchases</h4>
                            <div class="row">
                                <div class="col" style="text-align: center;"><i class="fa fa-shopping-cart" style="font-size: 59px;"></i>
                                    <div class="row">
                                        <div class="col"><button class="btn btn-primary" onclick="window.location.href='pur.php'"  type="button">Visit</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <div class="about-heading-content"></div>
        </div>
    </section><div><br></div>
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