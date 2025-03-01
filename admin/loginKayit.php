<?php
session_start(); 
$KullaniciNo=$_SESSION["rastgeleKullaniciNo"];
$kullaniciAdiSoyadi=$_POST["Adsoyad"];
$mail=$_POST["mail"];
$sifre=$_POST["sifre"];

//veritabanına veri eklemek için veri tabanı bağlantısını yapıyoruz.
$vt_sunucu= "localhost";
$vt_kullanici= "root";
$vt_sifre= "";
$vt_adi= "insaattakip";

// Bağlantıyı oluştur
$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

$ekle= "INSERT INTO login(id,kullaniciNo,kullaniciAdiSoyadi,mail,sifre)  
                        VALUES (NULL,'$KullaniciNo','$kullaniciAdiSoyadi','$mail','$sifre')";

if ($baglan->query($ekle) === TRUE)
{
   // echo "YENİ İNŞAAT KAYDI SİSTEME EKLENDİ" ;
}
else
{
    echo "Hata: " . $ekle. "<br>" . $baglan->error;
}


echo "Yeni Kullanıcı Eklendi.";
header("Refresh: 1; url=http://localhost/insaat/admin/index.php");



?>