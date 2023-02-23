
<?php
require 'conn.php';
session_start();

$id = $_GET['id'];

$sql= "delete from produit where ID_prod = '".$id."'";
mysqli_query($conn, $sql);
header("Location: ../assets.php");
?>