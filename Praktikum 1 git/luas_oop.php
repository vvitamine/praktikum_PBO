<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;

    public function luas(){
        return $this->panjang * $this->lebar;
    }
}

$kotak = new PersegiPanjang();
$kotak->panjang = 10;
$kotak->lebar = 5;

echo $kotak->luas();
?>
