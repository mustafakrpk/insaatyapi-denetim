<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>bseü-insaat denetim</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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


            <?php
            require 'VeriTabani/VeriTabani_baglanti.php';
            $sqlsorgusu = "SELECT * FROM kayanresim";
            $result = $con->query($sqlsorgusu);
            ?>

            <!-- galeri -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    
                </ol>
                <div class="carousel-inner">


                 <div class="carousel-item active">
                            <img src="img/carousel-1.jpg" alt="Carousel Image">
                            <div class="carousel-caption">
                                <p class="animated fadeInRight">Biz Profesyoneliz</p>
                                <h1 class="animated fadeInLeft">Hayalinizdeki proje için</h1>
                            </div>
                        </div>


                    <?php 
                    while($row = $result->fetch_assoc()) {
                    ?>

                       <div class="carousel-item">
                            <img src="<?php echo $row["resimYolu"]?>" alt="Carousel Image">
                            <div class="carousel-caption">
                                <p class="animated fadeInRight"><?php echo $row["kucukBaslik"] ?></p>
                                <h1 class="animated fadeInLeft"><?php echo $row["buyukBaslik"] ?></h1>
                            </div>
                        </div>


                    <?php
                    }
                    ?>


             
                </div>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Uzman İşçi Kadrosu</h3>
                                    <p>Bizimle çalışırken, işinizin uzman ellere teslim edildiğinden emin olabilirsiniz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Kaliteli Çalışma</h3>
                                    <p>işimizi en yüksek standartlarda gerçekleştirmek için sürekli çaba sarf ediyoruz.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>7/24 Hizmet</h3>
                                    <p>Sadece süreç boyunca değil , her zaman yanınızdayız.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- hakkimizda-->
            <?php  
            include  "ortakAlan/hakkimizdaAnlatim.php"
            ?>
           
           <!-- sayilar  -->
            <?php  
            include  "ortakAlan/sayilar.php"
            ?>
            <!-- Footer kısmı  -->
            
            <?php  
            include  "ortakAlan/altKisim.php"
            ?>
            

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
