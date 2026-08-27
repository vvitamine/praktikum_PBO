<?php
class Mobil {
public $nama;
public $warna;
function info() {
return "Mobil $this->nama berwarna $this->warna";
}
}
$mobil1 = new Mobil();
$mobil1->nama = "Toyota";
$mobil1->warna = "Merah";
echo $mobil1->info();
?>