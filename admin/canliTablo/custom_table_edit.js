$(document).ready(function(){
	$('#data_table').Tabledit({
		deleteButton: false,
		editButton: false,   		
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'adSoyad'], [2, 'sirketAdi'], [3, 'insaatAdi'], [4, 'maliyet'], [5, 'denetmenYorum']]
		  //editable: [[1, 'name'], [2, 'gender'], [3, 'age'], [4, 'designation'], [5, 'address']]
		},
		hideIdentifier: true,
		url: 'live_edit.php'		
	});
});