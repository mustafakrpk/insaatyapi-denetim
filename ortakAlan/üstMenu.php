<?php
require 'VeriTabani/VeriTabani_baglanti.php';
$sqlsorgusu = "SELECT * FROM menuler";
$result = $con->query($sqlsorgusu);

?>
<div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENÜ</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <?php 
                               while($row = $result->fetch_assoc()) {
                                ?>
                                <a href="<?php echo $row["url"] ?>" class="nav-item nav-link active "><?php echo $row["ad"] ?></a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="ml-auto">
                                <a class="btn" href="admin/index.php">Giriş Yap / Kayıt Ol</a>
                        </div>
                    </nav>
                </div>
            </div>