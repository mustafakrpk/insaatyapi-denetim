<?php

session_start();
//veritabanına veri eklemek için veri tabanı bağlantısını yapıyoruz.
$vt_sunucu= "localhost";
$vt_kullanici= "root";
$vt_sifre= "";
$vt_adi= "insaattakip";

// Bağlantıyı oluştur
$conn= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
$conn->set_charset("utf8");
// bağlantıyı test et

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}



$kullaniciNo=$_POST["kullaniciNo"];
$sifre=$_POST["sifre"];


$sql = "SELECT * FROM login";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        if ($row["kullaniciNo"] == $kullaniciNo && $row["sifre"] == $sifre)
        {
            $_SESSION["kullanici_id"] = $kullaniciNo;
            $_SESSION["adSoyad"] = $row["kullaniciAdiSoyadi"] ;
            $_SESSION["rol"] = $row["rol"] ;
            return header("Location: insaatKayit.php");
        }
        else
        {
            echo "Kullanıcı adı veya şifre hatalı";
        }
    }
}

?>


