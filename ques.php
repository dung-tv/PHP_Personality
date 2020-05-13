<?php  
	$data = file('question.txt') or die('Loi file');
	array_shift($data);
	$arrQues = array();
	foreach ($data as $key => $value) {
		$cen = explode('|', $value);
		$id = $cen[0];
		$arrQues[$id]['question'] = $cen[1];
	}
	// echo "<pre>";
	// print_r($arrQues);
	// echo "</pre>";
?>