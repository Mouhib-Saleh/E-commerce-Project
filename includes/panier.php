<?php
require 'conn.php';

$id = $_POST['id'];

if(isset($_COOKIE['produits'])) {
    foreach($_COOKIE['produits'] as $val) {
        if($val == $id) {
            header('Location: ../products.php?succ=produit existe deja dans votre panier');
            die();
        }
    }

    $i = count($_COOKIE['produits']);
    setcookie("produits[".$i."]",$id,time()+3600,"/");


}else{
    setcookie("produits[0]",$id,time()+3600,"/");
} 

if(isset($_COOKIE['produits'])) {
    foreach ($_COOKIE['produits'] as $name => $value) {
        echo $value;
    }
}

header('Location: ../products.php');
?>
?>