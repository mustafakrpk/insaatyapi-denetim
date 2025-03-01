

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

            
            
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Hizmetlerimiz</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Anasayfa</a>
                            <a href="servislerimiz.php">Hizmetlerimiz</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hizmet baslangıcı -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Hizmetlerimiz</p>
                        <h2>Hizmet Verdiğimiz Yerler</h2>
                    </div>

                    
                    <?php
                    require 'VeriTabani/VeriTabani_baglanti.php';
                    $sqlsorgusu = "SELECT * FROM servislerimiz";
                    $result = $con->query($sqlsorgusu);
                    ?>

                    <div class="row">
              


                        <?php 
                        while($row = $result->fetch_assoc()) {
                        ?>


                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item">
                                    <div class="service-img">
                                        <img src="<?php echo $row["resimYolu"] ?>" alt="Image">
                                        <div class="service-overlay">
                                            <p>
                                            <?php echo $row["aciklama"] ?>
                                            </p>
                                        </div> 
                                    </div>
                                    <div class="service-text">
                                        <h3><?php echo $row["kisaYazi"] ?></h3>
                                    </div>
                                </div>
                            </div>



                            

                        <?php
                            }
                        ?> 


                        <!-- Buraya veritabanından alanlar gelecek    -->  
                  
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
