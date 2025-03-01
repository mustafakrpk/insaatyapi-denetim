<?php
 
session_start();

 
session_destroy();
 
echo "Çıkış Yaptınız.Ana Sayfaya Yönlendiriliyorsunuz";
 
header("Refresh: 2; url=http://localhost/insaat/index.php");
 
?>