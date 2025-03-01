<?php
require 'VeriTabani/VeriTabani_baglanti.php';
include_once('tcpdf_6_2_13/tcpdf/tcpdf.php');

$id=$_GET['id'];   // raporlama sayfasından gelen id paratmetresı var sorguda kullanıyoruz

$inv_mst_query = "SELECT * FROM insaatkayit T1 WHERE T1.id='".$id."' ";
$inv_mst_results = mysqli_query($con,$inv_mst_query);
$con->set_charset("utf8");
$count = mysqli_num_rows($inv_mst_results);  
if($count>0)
{
	$data_row = mysqli_fetch_array($inv_mst_results, MYSQLI_ASSOC);

	// pdf ayarları ( font , kagit ayarı vs  )
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->SetCreator(PDF_CREATOR);
	//$pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$pdf->SetDefaultMonospacedFont('dejavusans');
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
	$pdf->setPrintHeader(false);
	$pdf->setPrintFooter(false);
	$pdf->SetAutoPageBreak(TRUE, 10);
	$pdf->SetFont('dejavusans', '', 12);
	$pdf->AddPage(); //default A4

	$content = '

	
	 <link rel="stylesheet" type="text/css"
          href="css/pdfUret.css"> 
	<table  style="border:1px solid #ddc;width:100%;">
	<div id="invoice">  
      <div id="invoice-header">
             <img src="img/img.png" style="width: 50px">
        <div class="vcard" id="company-address">
          <div class="fn org"><strong>Bilecik Şeyh Eddebali Üniversitesi || İnşaat Yapı Denetim Raporu </strong></div>
            <div id="company-postcode"><span class="region">Bilecik</span> <span class="postal-code">11100</span></div>
          </div>          
        </div>        
      </div>
      <hr>
      <!--  yazı alanı -->
      <div style="color:gray">
      <p>Firmamız, inşaat endüstrisinde uzun yıllardır faaliyet göstermektedir ve
      doğru yönetim ve kalite kontrolünün önemini her zaman vurgulamıştır. 
      Bu nedenle, inşaat denetiminde öncü olmayı hedefliyoruz.</p>

      <p>Vizyonumuz, inşaat endüstrisindeki en iyi denetim hizmetlerini sağlamak ve
       müşterilerimize hizmet verirken fark yaratmaktır. Bu amaçla, güçlü iş ahlakı, kalite yönetimi ve
       müşteri memnuniyeti konularında uzmanlaşarak 
       ve her zaman en yüksek standartları takip ederek çalışmaktayız.</p>
       </div>
       <hr>

      <div id="invoice-info">
      <br>
        <h2><strong>İnşaat Sahibi :</strong></h2>
        <p>Adı Soyadı  : '.$data_row['adSoyad'].'</p>    
        <p>Telefon Numarası: '.$data_row['telefonNo'].'</p>        
        <p>Mail Adresi  : '.$data_row['mailAdres'].'</p>        
        <p>Sahibi Olduğu Şirket  : '.$data_row['sirketAdi'].'</p>                  
      </div>
      <br><br>
     

      <div class="vcard" id="client-details"s>
       <p class="fn" style="background-color: #555555;font-size: large;color: #FFFFFF;text-align: center">'.$data_row['sirketAdi'].' - '.$data_row['insaatAdi'].'</p>
      </div>
      

      <table id="invoice-amount">
        <thead>
          <tr id="header_row">
            <th class="left details_th">Başlangıç Tarihi</th>
            <th class="quantity_th">Bitiş Tarihi</th>
            <th class="unitprice_th">Maliyet ( Türk Lirası )</th>
          </tr>
        </thead>
      
          <tr class="item">
          <br><br>
            <td class="item_l">'.$data_row['baslangicTarih'].'</td> 
            <td class="item_l">'.$data_row['bitisTarih'].'</td>
            <td class="item_l">'.$data_row['maliyet'].'</td>
          </tr>
      </table>


      <div id="invoice-other">
      <br><br>
       <tr><td colspan="2"><b>Malzemeler:</b></td></tr>
       <tr><td> '.$data_row['malzemeler'].'</td></tr>
      </div>
      

      <div id="payment-details">
        <h2>Denetim İncelemeleri</h2>
        <div id="bank_name">'.$data_row['denetmenYorum'].'</div>
      </div>
      

    </div>
	
	<p><b>Mustafa Kirpik</b></p>
	<p>Denetmen</p>
	  <img src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAFAAhwMBIgACEQEDEQH/xAAbAAEAAwEBAQEAAAAAAAAAAAAAAwQFAQIGB//EADYQAAICAgADBQQIBgMAAAAAAAECAAMEEQUSIRMxQVFhInGBkRQVIzJSobGyBkJTYpLBcoKi/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AP3GIiAiIgJxiFGyQB5mdmHfa/FeL1YlevoON9ref6rg6VfcGBPvTXvDciIgIiICIiAiIgIiICIiAiIgJ4uuqoray6xK61GyztoD4ylZm25DtTw5UcqeV7361ofLp94+g+JHdIMnGqxFS60Nm5rty09se9z+EdygAEkgdwPfAizOM15G8fA7ewAbvuprOq09GOhs66EHp3+W7P8AD4qs4euVSAq5HtqoGuRR0VdeGlABHnuVuIBcDhvYuTbZkMWvOutvTbdPXQQDw5gJp8OobGwqabCDYF3YR3Fz1Y/MmBZlLi+enDcCzIdS7DpXWO92Pcol2fKZeU3EeKG6nlcUWnHwlbqr3ge3YR+FOvy+Ya/8P41mNhuMm/tsuyw2ZB5t8rkD2fQAco1NSVeH4tWFQMetuZh7bsx9p2J6sfUnctQEREBERAREQEREBM1mfiblKmKYSkq9i9DcfEKfBfM+Ph5yXiC23tVipzrXbs22L4KNeyD4E717ty3Wi1oqVqFRRpVUaAEDlVaVVrXUqoijSqo0APICV1xnPEHyrmBCoEpQfyjvYn1J18FHmZbkWVcMfGtuYbFaFteeh3QMXOGRlcVS2nHN1dLFF2QF5xo7Y+WyD08axJMO7iOCl6ZWJl5jdq79srV6Kk7AVS2wNa6fr3nTwKTj4ldbkF9bc+bHqx+ZMsQMPi3GN4LDhTG65wu7Kl5+xViBzEDvPXYXx15AzOxeCIBmZgwU+k1VLRQmutegD37HMdEbO+pBG9T6pK0rBFahQTs8o1sz3AweFrj8NqavhvCsyx3622NWK2sbzYuRv4dB4S9z8Vt6LRi44/E9jWEf9QB+6aEQM/6Dl2aN/E7/AFWlEQH5gn84+p8c/fuzn9+baPyDamhEDP8AqbD3tfpK/wDDLtX9Gj6nxh1S7NQ+mbb/ALaaEQM76vyUO6eKZQ8ltWt1/bzfnOizidA+1poyl8TQezb/ABYkf+poRAhxsivJrL1k9DplYEFT5EHunZJqdgIiICUs/wC1uxcX+pZzsP7U6/u5B8ZdlHHPbcTyrf5aQtK+h1zt8+ZP8YF6IiAiIgIiICIiAiIgIiICIiAiIgcJAGz0Ep8HBOBXafvXlrjv+8lgPgCB8JJxGq2/h+TTjsEusqZEY9wYggGT1oERUUaCgACB6iIgIiICIiAiIgIiICIiAiIgf//Z"/>
	<p>21.05.2023</p>
	';

$pdf->writeHTML($content);



$datetime=date('dmY_hms');
$file_name = "DenetimRaporu_".$datetime.".pdf";
ob_end_clean();

if($_GET['ACTION']=='VIEW')
{
	$pdf->Output($file_name, 'I'); // I means Inline view
}
else if($_GET['ACTION']=='DOWNLOAD')
{
	$pdf->Output($file_name, 'D'); // D means download
}

//----- End Code for generate pdf

}
else
{
	echo 'Record not found for PDF.';
}

?>