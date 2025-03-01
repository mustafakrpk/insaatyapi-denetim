<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['adSoyad'])) {
		$update_field.= "adSoyad='".$input['adSoyad']."'";
	} else if(isset($input['sirketAdi'])) {
		$update_field.= "sirketAdi='".$input['sirketAdi']."'";
	} else if(isset($input['insaatAdi'])) {
		$update_field.= "insaatAdi='".$input['insaatAdi']."'";
	} else if(isset($input['maliyet'])) {
		$update_field.= "maliyet='".$input['maliyet']."'";
	} else if(isset($input['denetmenYorum'])) {
		$update_field.= "denetmenYorum='".$input['denetmenYorum']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE insaatkayit SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($con, $sql_query) or die("database error:". mysqli_error($con));		
	}
}


