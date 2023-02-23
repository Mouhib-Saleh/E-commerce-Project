<?php

if (isset($_POST['submit']))
{
  require 'conn.php';

$des = $_POST['des'];
$id = $_POST['id'];
$price = $_POST['prix'];
$nom = $_POST['nom'];
$cat = $_POST['cat'];
$brand = $_POST['mq'];
$prov = $_POST['fr'];

$image = $_FILES['image']['name'];
$target = "../assets/img/".basename($image);




    $sql = "INSERT INTO produit(Designation,Prix,Name,Categorie,Marque,Fournisseur,pic)
     values('$des','$price','$nom','$cat','$brand','$prov','$image')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }


  
    header("Location: ../assets.php?success=ProduitAjouter");
}
?>