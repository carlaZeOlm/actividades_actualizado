<?php
$fruta= $_POST['fruta'];

$frutas = array("Mango", "Sandia", "Durazno","Manzana", "Pera");

if ($fruta > 0 && $fruta <= count($frutas)) {
    echo $frutas[$fruta-1];
} 

?>
