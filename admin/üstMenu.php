<?php
session_start();
?>
<html>
<head>
  <script src="https://kit.fontawesome.com/958eae315b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
 
    <a class="navbar-brand" href="#">BŞEÜ-İNŞAAT DENETİM</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="http://localhost/insaat/admin/insaatKayit.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> &nbsp; İnşaat Kayıt Ekle</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/insaat/admin/insaatDurum.php"><i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; İnşaat Durum</a>
         
        </li>
        
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/insaat/admin/insaatRaporlama.php"><i class="fa fa-file-text" aria-hidden="true"></i> &nbsp; Raporlama</a>
        </li>

        <li class="nav-item">
        <a  class="nav-link" href="http://localhost/insaat/admin/canliTablo/index.php"><i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; Bilgi Güncelle</a>
        </li>
        
        <li class="nav-item ms-5">
        <a class="nav-link" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span> <?php echo $_SESSION["adSoyad"] ?></a>
        </li>
        <li class="nav-item ms-5">
        <a class="nav-link" href="http://localhost/insaat/admin/cikis.php"><span class="glyphicon glyphicon-log-in navbar-right"></span> Çıkış Yap</a>
        </li>


      </ul>
    
    </div>
  </div>
</nav>
</body>
</html>





 