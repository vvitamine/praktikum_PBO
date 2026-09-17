<?php

class Produk {
    protected $merek;
    protected $harga;

    public function __construct($merek, $harga) {
        $this->merek = $merek;

        if (!is_numeric($harga) || $harga < 0) {
            throw new Exception("Harga harus berupa angka positif.");
        }
        $this->harga = $harga;
    }

    public function getInfo() {
        return "Merek: " . $this->merek . "<br>" . 
               "Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}

class Makanan extends Produk {
    private $namaMakanan;
    private $tanggalKadaluarsa;

    public function __construct($namaMakanan, $merek, $harga, $tanggalKadaluarsa) {
        parent::__construct($merek, $harga);
        $this->namaMakanan = $namaMakanan;
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function getInfo() {
        return "Produk: Makanan " . $this->namaMakanan . "<br>" . 
               parent::getInfo() . "<br>" . 
               "Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa . "<br>" . 
               "Status: Segar<br>";
    }
}

class Elektronik extends Produk {
    private $namaElektronik;
    private $garansi;

    public function __construct($namaElektronik, $merek, $harga, $garansi) {
        parent::__construct($merek, $harga);
        $this->namaElektronik = $namaElektronik;
        $this->garansi = $garansi;
    }

    public function getInfo() {
        return "Produk: Elektronik " . $this->namaElektronik . "<br>" . 
               parent::getInfo() . "<br>" . 
               "Garansi: " . $this->garansi . " bulan<br>";
    }
}

try {
    $makanan1 = new Makanan("Mie Instan", "Indomie", 3500, "2025-06-30");
    echo $makanan1->getInfo() . "<br>"; 
    
    $elektronik1 = new Elektronik("Smart TV", "Samsung", 5000000, 12);
    echo $elektronik1->getInfo() . "<br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>