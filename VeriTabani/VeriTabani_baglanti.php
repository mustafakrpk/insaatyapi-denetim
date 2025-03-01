<?php
$vt_sunucu = "localhost";
$vt_kullanici = "root";
$vt_sifre = "U8qxeNwVjaIw6Q2d";
$vt_adi = "insaattakip";

// Bağlantıyı oluştur
$con = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
$con->set_charset("utf8");
?>