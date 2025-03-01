<?php
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



$sql = "SELECT * FROM insaatkayit";

$result = $conn->query($sql);


?>



<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
include "üstMenu.php";
?>

<div class="alert alert-primary mt-5 m-5 text-center" role="alert">
   KAYITLI İNŞAATLARIN BİLGİLERİ SİSTEMDE GÖRÜNMEKTEDİR.
</div>



<div class="container-sm">
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       ?>
<div class="card-group ">
        <div class="card w-25 h-50 ">
                <div class="card m-4 border-info mb-3">
                    <img class="card-img-top" src="img/insaatDurum.jpg" alt="Card image cap" style="width:200px;height: 200px" >
                    <div class="card-body">
                        <h5 class="card-title">İnşaat Adı  : <?php echo $row["insaatAdi"] ?></h5>
                        <p class="card-text">
                            <b>İnşaatı Yapan Kişinin Adı   :</b> <?php echo $row["adSoyad"] ?><br>
                            <b>İnşaatı Yapan Şirket   :</b> <?php echo $row["sirketAdi"] ?><br>
                            <b>İnşaatı Yapan Kişinin Mail Adresi    :</b> <?php echo $row["mailAdres"] ?>
                            <hr>
                            <b>İnşaat Yapımında Kullanılan Malzemeler   :</b> <?php echo $row["malzemeler"] ?>
                        </p>
                        <p class="card-text alert alert-warning"><small class="text-muted">İnşaat'ın <br> Başlangıç Tarihi  : <?php echo $row["baslangicTarih"]." Bitiş Tarihi : ".$row["bitisTarih"] ?></small></p>
                    </div>
                </div>
        </div>
</div>
<?php
    }
} else {

    echo "0 results";

}
?>
</div>
</body>
</html>

