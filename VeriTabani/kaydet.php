<?php

//Post metodu ile gönderilen verilerimizi alıyoruz.
$adSoyad=$_POST["adsoyad"];
$insaatAdi=$_POST["insaatadi"];
$sirketadi=$_POST["sirketadi"];
$telefonNo=$_POST["telefonNo"];
$email=$_POST["email"];
$malzemeler=$_POST["malzemeler"];
$baslangictarihi=$_POST["baslangictarihi"];
$bitistarihi=$_POST["bitistarihi"];



//veritabanına veri eklemek için veri tabanı bağlantısını yapıyoruz.
$vt_sunucu= "localhost";
$vt_kullanici= "root";
$vt_sifre= "";
$vt_adi= "insaattakip";

// Bağlantıyı oluştur
$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantıyı Kontrol Et
if (!$baglan) {
    die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());

}
$ekle= "INSERT INTO insaatkayit (id,adSoyad,insaatAdi,mailAdres,malzemeler,sirketAdi,telefonNo,baslangicTarih,bitisTarih)  
                        VALUES (NULL,'$adSoyad','$insaatAdi','$email','$malzemeler','$sirketadi','$telefonNo','$baslangictarihi','$bitistarihi')";

if ($baglan->query($ekle) === TRUE)
{
   // echo "YENİ İNŞAAT KAYDI SİSTEME EKLENDİ" ;
}
else
{
    echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

return header("Location: http://localhost/insaat/insaatKayit.php");