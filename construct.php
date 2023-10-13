<?php

// jualan produk
// komik
// game

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0
    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

$produk1 = new Produk("naruto", "musashi", "moontoon", 250000);

echo $produk1->getLabel();

echo '<hr>';

$produk4 = new Produk("Uncharted", "Moontoon", "Playstation", 250000);

echo $produk4->getLabel();
