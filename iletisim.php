<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>bseü-insaat denetim</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
           <?php  
           include  "ortakAlan/üstTanitim.php"
           ?>
           
           
           <?php  
           include  "ortakAlan/üstMenu.php"
           ?>

            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>İletişim</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Anasayfa</a>
                            <a href="iletisim.php">İletişim</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- iletisim formu -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>İletişime Geçin</p>
                        <h2>Hayat kısa iletişimde kalmak lazım...</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Konum</h2>
                                        <p>Bilecik/Merkez</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Telefon</h2>
                                        <p>+90 511 111 11 11</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Mail Adresimiz</h2>
                                        <p>insaatDenetim@bseu.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form action="mail.php" method="post" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" name="adSoyad" placeholder="Ad - Soyad Giriniz" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" name="mail" placeholder="Mail Adresini Giriniz" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" name="konu" placeholder="Mesaj Başlığınızı Yazınız" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" name="mesaj"  placeholder="Mesajınızı Yazınız"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Mesajı Gönder</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php  
            include  "ortakAlan/altKisim.php"
            ?>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
