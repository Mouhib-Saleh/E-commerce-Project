<?php
session_start();
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
    <script src="assets/js/jquery.min.js"></script>
</head>

<body style="background:linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url('assets/img/bg.jpg');">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="text-primary site-heading-upper mb-3"><strong>ADMIN SPACE: ASSets</strong><br></span><span class="site-heading-lower">				<div class="caption v-middle text-center">
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
              
                    </div>
                    

                    <?php 
                 if(isset($_SESSION['userid']) ) {    ?>
                 <div class="col" style="width: 7px;"><button class="btn btn-primary" data-toggle="modal" data-target="#add" type="button" style="box-shadow: 0px 0px 20px rgb(0,0,0);">Add more</button></div>
                 <button class="btn btn-outline-primary"  type="button" onclick="window.location.href='includes/logout.php'" style="box-shadow: 0px 0px 6px rgb(3,3,3), 0px 0px 20px;background: #f7f7f7;color: rgb(0,0,0);">Log out</button>
                 <?php } ?>
            </div>
        </div>
    </nav>



























    
    <section class="page-section cta" style="border-radius: 21px;">
        <div class="container">
            <div class="card" id="TableSorterCard">
                <div class="row table-topper align-items-center">
                    <div class="col-4 text-left" style="margin: 0px;padding: 5px 15px;"><button class="btn btn-primary btn-sm reset" type="button" style="padding: 5px;margin: 2px;">Reset Filters</button><button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="padding: 5px;margin: 2px;"><i class="fa fa-search-plus"></i></button><button class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="padding: 5px;margin: 2px;"><i class="fa fa-search-minus"></i></button></div>
                    <div class="col-4 text-center" style="margin: 0px;padding: 5px 10px;">
                        <h6 id="counter">Showing: <strong id="rowCount">ALL</strong>&nbsp;Row(s)</h6>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-12">
                        <div>
                            <table class="table table tablesorter" id="ipi-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Nom</th>
                                        <th class="sorter-false">ID Produit</th>
                                        <th class="filter-false">Quantité</th>
                                        <th class=" ">Marque</th>
                                        <th class="filter-false">Prix</th>
                                        <th class="filter-false sorter-false">Modifier</th>
                                        <th class="filter-false sorter-false">Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php      require 'includes/conn.php';
                                    $sql ="SELECT *
                                    FROM produit";
               $selectRes = mysqli_query($conn, $sql);
                                    
               foreach($selectRes as $val) {
                echo '<tr>
                <input type="text" id="ID_prod" value="'.$val['ID_prod'].'" hidden>
                <td>'.$val['Name'].'</td>
                <td>'.$val['ID_prod'].'</td>
                <td>'.$val['Quantite'].'</td>
                <td>'.$val['Marque'].'</td>
                <td>'.$val['Prix'].'</td>
               
                
                <td><a href="assets.php?prod='.$val['ID_prod'].'" class="badge badge-primary badge-sm"  id="btn">Modifier</a></td>
                <td><a href="includes/supp.php?id='.$val['ID_prod'].'" class="badge badge-danger badge-sm">Supprimer</a></td>
                </tr>';
            }
            ?>         
                                    
                                    
                                    
                                    
                                   
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
      
         







        <div class="modal fade" role="dialog" tabindex="-1" id="add" >
            <div class="modal-dialog modal-l modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                    <form action="includes/addprd.php" method="POST"   enctype="multipart/form-data">
                                    <div class="form-group row">
                                       <label for="id" class="col-sm-4 col-form-label">ID</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="id" name="id" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="des" class="col-sm-4 col-form-label">Designation</label>
                                       <div class="col-sm-10">
                                       <textarea id="des" name="des" rows="3" cols="50" required >
</textarea>
                                         
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="nom" name="nom" required>
                                       </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                       <label for="prix" class="col-sm-4 col-form-label">Prix</label>
                                       <div class="col-sm-8">
                                          <input type="number" class="form-control" id="prix" name="prix" required>
                                       </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                       <label for="cat" class="col-sm-4 col-form-label">Categorie</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="cat" name="cat" required>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                    <label for="img" class="col-md-4 col-form-label">Product picture</label>
                                    <div class="col-sm-8">
                                    <input type="file" class="form-control" id="image" name="image" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="mq" class="col-sm-4 col-form-label">Marque</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="mq" name="mq" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                       <label for="fr" class="col-sm-4 col-form-label">Fournisseur</label>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control" id="fr" name="fr" required>
                                       </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-6"></div>
                                    <button type="submit" name="submit"  class="btn btn-primary">Ajouter Produit</button>
                                    </div>
                                 </form>
                        <hr style="background-color: #bababa;">
                       
                    </div>
                </div>
            </div>
      





    







    </section>
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
    


    <?php
         if (isset($_GET['prod'])){
          
          
             
                                 
           echo '<script type="text/javascript">'
             . '$( document ).ready(function() {'
             . '$("#modal7").modal("show");'
             . '});'
             . '</script>';
         
          } 
         
         ?>   






      <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Modifier produit</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form method="post" action="includes/modprod.php">
            <div class="modal-body">
               <?php
                 require 'includes/conn.php';
                 
                 
                  
                  $id = $_GET['prod'];
                  
                  $sql ="SELECT * from produit where ID_prod = '".$id."'";
                  $res=mysqli_query($conn, $sql);
                  $row = mysqli_fetch_assoc($res);
                  
                    echo '<div class="row">
                    <div class="col-2">
                      <label for="ID_prod">ID_prod</label>
                      <input type="text"  class="form-control" id="ID_prod" name="ID_prod" value="'.$id.'">
                    </div>
                    <div class="col-2">
                      <label for="Designation">Designation</label>
                      <input type="text" class="form-control" id="Designation" name="Designation" value="'.$row['Designation'].'">
                    </div>
                    <div class="col-2">
                      <label for="Prix">Prix</label>
                      <input type="number" class="form-control" id="Prix" name="Prix" value="'.$row['Prix'].'">
                    </div>
                    <div class="col-2">
                      <label for="Quantité">Quantité</label>
                      <input type="number" class="form-control" id="Quantité" name="Quantite" value="'.$row['Quantite'].'">
                    </div>
                    <div class="col-2">
                      <label for="Marque">Marque</label>
                      <input type="text" class="form-control" id="Marque" name="Marque" value="'.$row['Marque'].'">
                    </div>
                    <div class="col-2">
                      <label for="Fournisseur">Fournisseur</label>
                      <input type="text" class="form-control" id="Fournisseur" name="Fournisseur" value="'.$row['Fournisseur'].'">
                    </div>
                  </div>';
                  ?>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
               <button type="submit" class="btn btn-primary">Valider</button>
            </div>
         </form>
      </div>
   </div>
</div>

</body>


</html>