<?php 
session_start(); 
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include_once("db_connect.php");
include("header.php"); 
?>


<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<link rel="stylesheet" type="text/css"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


<?php
	include("../üstMenu.php");
?>
<div class="container home">	
	 
	<table id="data_table" class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>İnşaat Sahibi</th>
				<th>Şirket Adı</th>
				<th>İnşaat Adı</th>	
				<th>İnşaat Maliyeti</th>
				<th>Denetmen Yorumu</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql_query = "SELECT id, adSoyad, sirketAdi,insaatAdi,  maliyet, denetmenYorum FROM insaatkayit";
			$resultset = mysqli_query($con, $sql_query) or die("database error:". mysqli_error($con));
			while( $developer = mysqli_fetch_assoc($resultset) ) {
		
			$id =$_SESSION["kullanici_id"];
			$rol=$_SESSION["rol"];

				if($rol=="yönetici")
				{
					?>
						<tr id="<?php echo $developer ['id']; ?>">
						<td><?php echo $developer ['id']; ?></td>
						<td class="devredisi"><?php echo $developer ['adSoyad']; ?></td>
						<td class="etkin"><?php echo $developer ['sirketAdi']; ?></td>
						<td class="etkin"><?php echo $developer ['insaatAdi']; ?></td>   
						<td class="etkin"><?php echo $developer ['maliyet']; ?></td>
						<td class="etkin"><?php echo $developer ['denetmenYorum']; ?></td>   
						</tr>
					<?php
				}
				else
				{
					?>
						<tr id="<?php echo $developer ['id']; ?>">
						<td><?php echo $developer ['id']; ?></td>
						<td><?php echo $developer ['adSoyad']; ?></td>
						<td class="etkin"><?php echo $developer ['sirketAdi']; ?></td>
						<td class="etkin"><?php echo $developer ['insaatAdi']; ?></td>   
						<td class="etkin"><?php echo $developer ['maliyet']; ?></td>
						<td class="devredisi"><?php echo $developer ['denetmenYorum']; ?></td>   
						</tr>
					<?php
				}

			 } ?>
		</tbody>
    </table>	

</div>
<script type="text/javascript" src="custom_table_edit.js"></script>


		<script type="text/javascript">
			$(document).ready(function () {
			$('.etkin').prop('disabled', false);
			$('.devredisi').prop('disabled', true);
			});
		</script>



                                                                                                       