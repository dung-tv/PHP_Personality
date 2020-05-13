<?php  
	$data = file('options.txt') or die('Loi file');
	array_shift($data);
	$arrAns = array();
	foreach ($data as $key => $value) {
		$cen = explode('|', $value);
		$idQues = $cen[0];
		$idAns = $cen[1];
		$arrAns[$idQues][$idAns]['option'] = $cen[2];
		$arrAns[$idQues][$idAns]['point'] = $cen[3];
	}
	// echo "<pre>";
	// print_r($arrAns);
	// echo "</pre>";
?>