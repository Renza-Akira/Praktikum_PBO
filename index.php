<?php

//panggil file Propertyconstant
require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new produk("P001", "laptop", 10000000, 5);

//$produk ->kode = 'P001';
//$produk ->nama = 'Laptop';
//$produk ->harga = '10000000';
//$produk ->stok = 5;

//hasil
echo "Produk: ". $produk->nama;
echo"<br/>";

echo "Harga: Rp.". $produk->harga;
echo"<br/>";

echo "Stok: ". $produk->stok;
echo"<br/>";

echo "Pajak: ". $produk->pajak() ."%";
echo"<br/>";
echo"<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();