<?php

session_start();
 

if(!isset($_SESSION["kullanici_id"])){
 //giriş yaptıktan sonra geri tusuna basıp siteyi kullanmamak için
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
header("Refresh: 1; url=http://localhost/insaat/index.php");
 
}else{
 

//giriş yaptıtran sonra engelleyici kurallar yok

}
 
?>