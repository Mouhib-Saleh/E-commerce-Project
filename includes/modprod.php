<?php
require 'conn.php';
session_start();

$id = $_POST['ID_prod'];
$des = $_POST['Designation'];
$prix = $_POST['Prix'];
$marque = $_POST['Marque'];
$quant = $_POST['Quantite'];
$four = $_POST['Fournisseur'];

$sql = "update produit set ID_prod='".$id."',Designation='".$des."',Prix='".$prix."',Quantite='".$quant."',Marque='".$marque."',Fournisseur='".$four."' WHERE ID_prod='".$id."'";
mysqli_query($conn, $sql);

header("Location: ../assets.php?success");
?>