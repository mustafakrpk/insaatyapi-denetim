<?php
session_start(); 
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include "ayar.php";
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- JS for jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "üstMenu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12" align="center">
            <div class="alert alert-primary mt-5 m-5 text-center" role="alert">
                İnşaat durumları hakkında detaylı incele içim raporu görüntüleyebilir ya da indirebilirsiniz
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Sıra</th>
                    <th>Ad Soyad</th>
                    <th>Şirket Adı</th>
                    <th>İnşaat Adı</th>
                    <th>Telefon Numarası</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sayac=0;
                $id =$_SESSION["kullanici_id"];
                $rol=$_SESSION["rol"];

                if($rol=="yönetici")
                {
                    $sql = "SELECT * FROM insaatkayit";
                }
                else
                {
                    $sql = "SELECT * FROM insaatkayit  WHERE kullaniciNo='".$id."' ";
                }

                require 'VeriTabani/VeriTabani_baglanti.php';
                $results = mysqli_query($con,$sql);
                $count = mysqli_num_rows($results);
                if($count>0)
                {
                    while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
                    {
                        $sayac++;
                        ?>
                        <tr>
                            <td><?php echo $sayac; ?></td>
                            <td><?php echo $data_row['adSoyad']; ?></td>
                            <td><?php echo $data_row['sirketAdi']; ?></td>
                            <td><?php echo $data_row['insaatAdi']; ?></td>
                            <td><?php echo $data_row['telefonNo']; ?></td>
                            <td>
                                <a href="pdf_uret.php?id=<?php echo $data_row['id']; ?>&ACTION=VIEW" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Rapor Görüntüle</a> &nbsp;&nbsp;
                                <a href="pdf_uret.php?id=<?php echo $data_row['id']; ?>&ACTION=DOWNLOAD" class="btn btn-danger"><i class="fa fa-download"></i> Rapor İndir</a>
                                &nbsp;&nbsp
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>