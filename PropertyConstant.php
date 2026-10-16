<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new Produk();

$produk->kode = 'P001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

echo "Produk : ",$produk->nama, "<br>";
echo "Harga : Rp.", $produk->harga, "<br>";
echo "Stok : ", $produk->stok, "<br>";
echo "Pajak : ", $produk->pajak(), "% <br> <br> ";
echo "Total setelah  harga pajak : Rp.", $produk->total(), "<br>";