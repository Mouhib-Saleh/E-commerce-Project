<?php
require 'conn.php';
session_start();

$id = $_GET['id'];

$sql= "delete from commande where ID_prod = '".$id."'";
mysqli_query($conn, $sql);
header("Location: ../pur.php");
?>