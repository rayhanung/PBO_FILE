<?php

class Produk {

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();

$produk->kode = 'P001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak;


echo "Produk : ",$produk->nama, "<br>";
echo "Harga : Rp.", $produk->harga, "<br>";
echo "Stok : ", $produk->stok, "<br>";
echo "Pajak : ", $pajak, "% <br> <br> ";
echo "Total setelah  harga pajak : Rp.", $total, "<br>";