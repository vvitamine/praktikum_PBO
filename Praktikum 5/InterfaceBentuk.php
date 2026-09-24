<?php

interface Bentuk {
    public function hitungLuas();
}

class Persegi implements Bentuk {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }
}

class Lingkaran implements Bentuk {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        return 3.14 * $this->radius * $this->radius;
    }
}

function cetakInfoBentuk(Bentuk $bentuk) {
    if ($bentuk instanceof Persegi) {
        echo "Luas Persegi (sisi=" . $bentuk->sisi . "): " . $bentuk->hitungLuas() . "<br>";
    } elseif ($bentuk instanceof Lingkaran) {
        echo "Luas Lingkaran (radius =" . $bentuk->radius . "): " . $bentuk->hitungLuas() . "<br>";
    }
}

$daftarBentuk = [
    new Persegi(5),
    new Lingkaran(7)
];

foreach ($daftarBentuk as $item) {
    cetakInfoBentuk($item);
}

?>