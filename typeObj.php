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
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk
{
    //type objectnya adalah produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("naruto", "musashi", "moontoon", 250000);
$produk4 = new Produk("Uncharted", "Moontoon", "Playstation", 250000);

echo "Komik: " . $produk1->getLabel();
echo '<br>';
echo "Game: " . $produk4->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
$infoProduk4 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
echo "<br>";
echo $infoProduk4->cetak($produk4);
