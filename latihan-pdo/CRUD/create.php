<?php
require_once '../Catatan.php';

$c = new Catatan();
$hasil = $c->setJudul("keempat")
           ->setIsi("ini diubah lagi")
           ->save();

echo $hasil ? "Berhasil disimpan" : "Gagal";