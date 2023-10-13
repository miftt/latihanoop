<?php

// jualan produk
// komik
// game

class Produk
{
    public $judul = 'judul',
        $penulis = 'penulis',
        $penerbit = 'penerbit',
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = 'naruto';
$produk1->penulis = 'musashi';
$produk1->penerbit = 'Moonton';
$produk1->harga = 20000;

echo $produk1->getLabel();

echo '<hr>';

$produk4 = new Produk();
$produk4->judul = 'Uncharted';
$produk4->penulis = 'Jeki';
$produk4->penerbit = 'Moonton';
$produk4->harga = 250000;

echo $produk4->getLabel();
