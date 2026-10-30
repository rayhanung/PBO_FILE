<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P001', 'laptop', 10000000, 5);

//$produk->kode = 'P001';
//$produk->nama = 'laptop';
//$produk->harga = 10000000;
//$produk->stok = 5;

echo "Produk : ",$produk->nama, "<br>";
echo "Harga : Rp.", $produk->harga, "<br>";
echo "Stok : ", $produk->stok, "<br>";
echo "Pajak : ", $produk->pajak(), "% <br> <br> ";
echo "Total setelah  harga pajak : Rp.", $produk->total(), "<br>";