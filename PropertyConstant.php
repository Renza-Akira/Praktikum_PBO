<?php

class produk {

    //property
    public string $kode; 
    public string $nama;
    public float $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$produk = new produk();

$produk ->kode = 'P001';
$produk ->nama = 'Laptop';
$produk ->harga = '10000000';
$produk ->stok = 5;

//hitung pajak
$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK; //11

//total
$total = $produk->harga + $jumlahpajak; //11

//hasil
echo "Produk: ". $produk->nama;
echo"<br/>";

echo "Harga: Rp.". $produk->harga;
echo"<br/>";

echo "Stok: ". $produk->stok;
echo"<br/>";

echo "Pajak: ". $pajak."%";
echo"<br/>";
echo"<br/>";
echo "Total harga setelah pajak: Rp." . $total;


