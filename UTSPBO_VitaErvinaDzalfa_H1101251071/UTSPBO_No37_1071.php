<?php

abstract class ProdukTani {
    protected $id, $nama, $hargaDasar;

    public function __construct($id, $nama, $hargaDasar) {
        $this->id = $id; $this->nama = $nama; $this->hargaDasar = $hargaDasar;
    }

    public function getId() {return $this->id;}
    public function getNama() {return $this->nama;}
    public function getHargaDasar() {return $this->hargaDasar;}

    abstract public function hitungTotal();
    abstract public function getJenis();
}

class Bibit extends ProdukTani {
    private $polybag;
    public function __construct($id, $n, $h, $p) { parent::__construct($id, $n, $h); $this->polybag = $p; }
    public function hitungTotal() { return $this->hargaDasar + (3000 * $this->polybag); }
    public function getJenis() { return "Bibit"; }
    public function cetakDetail() { return "$this->polybag polybag"; } 
}

class Pupuk extends ProdukTani {
    private $kg;
    public function __construct($id, $n, $h, $k) { parent::__construct($id, $n, $h); $this->kg = $k; }
    public function hitungTotal() { 
        $tot = $this->hargaDasar * $this->kg; 
        return ($this->kg > 10) ? $tot * 0.9 : $tot; 
    }
    public function getJenis() { return "Pupuk"; }
    public function cetakDetail() { return "$this->kg kg"; }
}

class Pestisida extends ProdukTani {
    private $liter;
    public function __construct($id, $n, $h, $l) { parent::__construct($id, $n, $h); $this->liter = $l; }
    public function hitungTotal() { return $this->hargaDasar + (5000 * $this->liter); } 
    public function getJenis() { return "Pestisida"; }
    public function cetakDetail() { return "$this->liter liter"; }
}

$daftarProduk = [
    new Bibit("B01", "Vita", 15000, 5),      
    new Pupuk("P01", "Rika", 12000, 15),    
    new Pestisida("S01", "Bian", 25000, 2),  
    new Bibit("B02", "Mangga", 20000, 10),
    new Pupuk("P02", "Urea", 8000, 5)
];

echo "No | ID | Nama | Jenis | Detail | Harga Dasar | Total|\n";

$totalKeseluruhan = 0;
foreach ($daftarProduk as $i => $p) {
    $tot = $p->hitungTotal();
    $totalKeseluruhan += $tot;
    
    echo ($i+1) . " | " . $p->getId() . " | " . $p->getNama() . " | " . $p->getJenis() . " | " . $p->cetakDetail() . " | Rp" . $p->getHargaDasar() . " | Rp" . $tot . "|" . "\n";
}

echo "---------------------------------------------------------------------\n";
echo "TOTAL KESELURUHAN: Rp" . $totalKeseluruhan . "---------------------------------------------------------------------" . "\n";

?>
