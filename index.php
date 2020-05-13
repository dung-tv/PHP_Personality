<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personality</title>
	<style>
		pre {
			display: none;
		}
	</style>
</head>
<body>
	<?php  
		require_once 'ques.php';
		require_once 'answer.php';
		require_once 'check.php';
		$sum = '';
		// $check = 10;
		
	?>
	<div class="content">
		<form action="#" method="POST">
			<?php  
				$i = 1;
				$arrAnsAddQues = array();
				foreach ($arrQues as $id => $value) {
					$arrAnsAddQues[$id]['question'] = $value['question'];
					$arrAnsAddQues[$id]['option'] = $arrAns[$id];
				}
				// echo "<pre>";
				// print_r($arrAnsAddQues);
				// echo "</pre>";

				foreach ($arrAnsAddQues as $key => $value) {
					echo '<div>
						<p>Câu hỏi ' . $i . ': 
						<span>'. $value['question'] .
						'</span></p>';
					echo '<ul>';
					if (isset($_POST[$key])) {
						$check = $_POST[$key];
						// echo($check);
						
					}
					foreach ($value['option'] as $idAns => $ans) {
						
						echo '<li><input type="radio" 
							name="' . $key .'" 
							value="'. $idAns .'"' . (isset($_POST[$key]) && $_POST[$key] == $idAns ? 'checked=""' : '') . 
							'>' .
							$ans['option'] .'
							</li>';
						if (isset($_POST[$key]) && $check == $idAns) {
							$result = $ans['point'];
							// echo($result);
						}
							
					}
					echo '</ul>';
					echo "</div>";
					$i ++;	
					if (isset($_POST[$key])) {
						// echo($result);
						$result = intval($result);
						$sum = intval($sum);

						$sum = $sum + $result;
						echo($sum);
					}
				}
			?>
			<button type="submit">Kiểm tra</button>
		</form>
		<?php  
			foreach ($arrCheck as $key => $value) {
				if ($sum >= $value['min'] && $sum <= $value['max']) {
					echo "<br>" . $key;
				}
			}
		?>
	</div>
</body>
</html>
