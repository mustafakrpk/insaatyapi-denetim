<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php'; 

//wbsxbciisxczndvu

$mail_kullaniciAdi=$_POST['adSoyad'];
$mail_kullaniciMailAdresi=$_POST['mail'];
$mail_konu=$_POST['konu'];
$mail_kullaniciMesaji=$_POST['mesaj'];

$mail_gönderilecekVeri="\nMüşteri Adı - Soyadı  :".$mail_kullaniciAdi."\n
                        Müşteri Mail Adresi : ".$mail_kullaniciMailAdresi ."\n
                        Müşteri Mesaj Başlığı  : ".$mail_konu."\n
                        Mesaj : ".$mail_kullaniciMesaji."\n";


                       $mail=new PHPMailer();
                       $mail->IsSMTP();
                       $mail->SMTPAuth=true;
                       $mail->CharSet = "utf-8";
                       $mail->SMTPSecure="tls";
                       $mail->Port=465;
                       $mail->Host="ssl://smtp.gmail.com";
                       $mail->Username="basdemir803@gmail.com";
                       $mail->Password="ailvfdcnhlgiqica";
                       $mail->addAddress("basdemir803@gmail.com");
                       $mail->Subject = 'BŞEÜ - İNSAAT DENETİMİ - İLETİŞİM FORMU';
                       
                     $mail->Body=$mail_gönderilecekVeri;


    $mail->Send();
    echo "Mail Gönderildi.";
    header("Refresh: 1; url=http://localhost/insaat/iletisim.php");

