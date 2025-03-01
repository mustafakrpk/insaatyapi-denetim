<html>
<head>
    <link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
include "üstMenu.php";
?>




<!-- FORM  -->
<div class="container mt-5">
    <form action="VeriTabani/kaydet.php" method="post">
        <h2>İnşaat Kayıt</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="first">İsim - Soyad</label>
                    <input type="text" class="form-control" placeholder="" id="adsoyad" name="adsoyad">
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="company">Şirket Adı</label>
                    <input type="text" class="form-control" placeholder="" id="company" name="sirketadi">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="last">İnşaat Adı</label>
                    <input type="text" class="form-control" placeholder="" id="insaatAdi" name="insaatadi">
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">

                <div class="form-group">
                    <label for="phone">Telefon Numarası</label>
                    <input type="tel" class="form-control" id="Telefon Numarası" name="telefonNo">
                </div>
            </div>
            <!--  col-md-6   -->
        </div>
        <!--  row   -->


        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="email">Mail Adresi</label>
                    <input type="email" class="form-control" id="E-mail Adresi" placeholder="email" name="email">
                </div>
            </div>
            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="insaatBaslama">İnşaatın Başlangıç Tarihi</label>
                    <input type="date" class="form-control" id="baslamaTarihi" placeholder="İnşaat Başlangıç Tarihi" name="baslangictarihi">
                </div>

            </div>
            <!--  col-md-6   -->
            <div class="col-md-6 mt-2">
                <label for="insaatBaslama">İnşaatta Kullanılacak Malzemeler</label>
                <textarea class="form-control" id="insaatMalzemeler" style="height: 100px" name="malzemeler"></textarea>
            </div>

            <!--  col-md-6   -->

            <div class="col-md-6">
                <div class="form-group">
                    <label for="insaatBitis">İnşaatın Bitiş Tarihi</label>
                    <input type="date" class="form-control" id="bitisTarihi" placeholder="İnşaat Bitiş Tarihi" name="bitistarihi">
                </div>

            </div>


        </div>
        <!--  row   -->

        <button type="submit" class="btn btn-primary mt-5">Kaydet</button>
    </form>
</div>


</body>
</html>

