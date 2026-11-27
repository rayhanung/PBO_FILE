<?php

require('./jasa.php');

use Pbo\Marketplace\jasa;

//object
$produk = new jasa();

$produk->setKode('P0001')->setNama('Laptop')->setHarga('10000000')->setstok(5);


echo "Produk : ",$produk->getNama(), "<br>";
echo "Harga : Rp.", $produk->getHarga(), "<br>";
echo "Stok : ", $produk->getStok(), "<br>";
echo "Pajak : ", $produk->pajak(), "% <br> <br> ";
echo "Total setelah  harga pajak : Rp.", $produk->total(), "<br>";

echo "<br/>";
echo "Metode Pembayaran: ". $produk->payment('qris');