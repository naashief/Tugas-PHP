<?php
class PersegiP { // buka class
private $alas;
private $tinggi;
function __construct( $p, $l )
{
$this->panjang = $p;
$this->lebar = $l;
}
function getLuas()
{
return $this->panjang * $this->lebar ;
}
function getKeliling()
{
return 2 * $this->panjang + 2 * $this->lebar;
}
} // tutup class
?>