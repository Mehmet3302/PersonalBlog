<?php

$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "";
$vt_adi = "blogsitem";
$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("VeriTabanı Bağlantı İşlemi Başarısız". mysqli_connect_error());
}
?>