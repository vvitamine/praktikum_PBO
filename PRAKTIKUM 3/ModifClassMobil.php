<?php

class Mobil {
    private $merek;
    private $warna;
    private $kecepatan;

    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    public function getMerek() {
        return $this->merek;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }

    public function setKecepatan($kecepatan) {
        if ($kecepatan < 0) {
            throw new Exception("Kecepatan tidak boleh negatif.");
        }
        if ($kecepatan > 200) {
            throw new Exception("Kecepatan maksimal 200 km/jam.");
        }
        $this->kecepatan = $kecepatan;
    }

    public function setWarna($warna) {
        $warnaBersih = trim($warna); 
        
        if (empty($warnaBersih)) {
            throw new Exception("Warna tidak boleh kosong.");
        }
        if (strlen($warnaBersih) < 3) {
            throw new Exception("Warna minimal 3 karakter.");
        }
        $this->warna = $warnaBersih;
    }

    public function getInfo() {
        return "Mobil $this->merek berwarna $this->warna dengan kecepatan $this->kecepatan km/jam.";
    }

    public function jalankan() {
        return "Mobil $this->merek berjalan...";
    }

    public function berhenti() {
        return "Mobil $this->merek berhenti.";
    }
}

try {
    $mobil1 = new Mobil("Toyota", "Merah", 120);
    $mobil2 = new Mobil("Honda", "Hitam", 100);
    $mobil3 = new Mobil("Suzuki", "Putih", 80);

    echo $mobil1->getInfo() . "<br>";
    echo $mobil1->jalankan() . "<br>";
    echo $mobil1->berhenti() . "<br><br>";

    echo $mobil2->getInfo() . "<br>";
    echo $mobil3->getInfo() . "<br><br>";

    echo "<b>Mengubah data Mobil 1 menggunakan Setter:</b><br>";
    $mobil1->setKecepatan(150);     
    $mobil1->setWarna("Biru");
    echo $mobil1->getInfo() . "<br><br>";


} catch (Exception $e) {
    echo "<b>Error:</b> " . $e->getMessage() . "<br>";
}
?>