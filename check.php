<?php  
	$data = file('result.txt') or die('Loi file');
	array_shift($data);
	$arrCheck = array();
	foreach ($data as $key => $value) {
		$cen = explode('|', $value);
		$result = $cen[2];
		$arrCheck[$result]['min'] = $cen[0];
		$arrCheck[$result]['max'] = $cen[1];
	}
	// echo "<pre>";
	// print_r($arrCheck);
	// echo "</pre>";
?>