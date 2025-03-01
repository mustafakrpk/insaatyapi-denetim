<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/958eae315b.js" crossorigin="anonymous"></script>
    </head>
<body>



<section clas="main-container">
            <div class="container">
                <div class="row">
                   <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="header-content text-center">
                        <h4 class="header-motto" style=color>
                        <a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> &nbsp; Anasayfa &nbsp;</a>   
                        <i class="fa fa-arrow-right" aria-hidden="true"></i> &nbsp; Giriş Yap - Kayıt Ol &nbsp;
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </h4>
                    </div>
                </div>
                </div>

                <?php 
                session_start(); 
                $min = 1000;
                $max = 2000000000;
                $rastgeleKullaniciNo = rand($min, $max);
                $_SESSION["rastgeleKullaniciNo"] = $rastgeleKullaniciNo;
                ?>
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-block">
                          <h2>Kayıt Ol</h2>
                          <div class="form">
                            <form action="loginKayit.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" value=" <?php echo $rastgeleKullaniciNo ?> "  name="YeniKullaniciNo" disabled>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ad Soyad Giriniz" name="Adsoyad" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Mail Adresinizi Giriniz" name="mail" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Şifrenizi Giriniz" name="sifre" required>
                                </div>
                                <button type="submit" class="btn btn-default custom-btn">Kayıt Ol</button>
                            </form>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-block">
                           <h2>Giriş Yap</h2>
                           <div class="form">
                            <form action="loginControl.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="kullaniciNo" placeholder="Kullanıcı Numaranızı Giriniz" name="kullaniciNo">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="sifre"  placeholder="Şifrenizi Giriniz" name="sifre"">
                                </div>
                                <button type="submit" class="btn btn-default custom-btn">Giriş Yap</button>
                            </form>
                           </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>




</body>
</html>