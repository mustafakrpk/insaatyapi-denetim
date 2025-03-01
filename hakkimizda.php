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
                            <h2>hakkımızda</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Anasayfa</a>
                            <a href="hakkimizda.php">Hakkımızda</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- hakkimizda-->
            <?php  
            include  "ortakAlan/hakkimizdaAnlatim.php"
            ?>
            
            
            <!-- sayilar -->
            <?php  
            include  "ortakAlan/sayilar.php"
            ?>
            <!-- Fact End -->
            
            
            <?php  
            include  "ortakAlan/altKisim.php"
            ?>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
