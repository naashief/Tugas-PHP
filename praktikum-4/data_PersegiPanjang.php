<?php
require_once "class_PersegiPanjang.php";
$PP1 = new PersegiP( 10 , 13 );
$PP2 = new PersegiP( 4 , 15 );
echo "<br/>Luas Persegi Panjang I ".$PP1->getLuas();
echo "<br>Luas Persegi Panjang II ".$PP2->getLuas();
echo "<br>Keliling Persegi Panjang I ".$PP1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$PP2->getKeliling();
?>