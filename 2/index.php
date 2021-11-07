<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mustafa Çifci | Ödev 2</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="fontawesome/css/all.css">


    <?php
    	$horse = rand(1,64);

    	$horse_square = "square_".$horse; // css için

    	$horse_general_formula = array(6,10,15,17);

    	$horse_formula = array(6,10,15,17);

    	$horse_left_1 = array(1,9,17,25,33,41,49,57); // +6, +15, -10, -17
    	$horse_left_2 = array(2,10,18,26,34,42,50,58); // +6, -10

    	$horse_right_1 = array(8,16,24,32,40,48,56,64); // -6, -15, +10, +17
    	$horse_right_2 = array(7,15,23,31,39,47,55,63); // -6, +10

    	$horse_steps = array();

    	if (in_array($horse, $horse_left_1)) {
    		for ($hgf = 0; $hgf < count($horse_general_formula); $hgf++) { 
    				
    			if ($hgf != 1 && $hgf != 3) {
    				$step = $horse - $horse_general_formula[$hgf];

    				$horse_steps[] = $step;
    			}	
				if ($hgf != 0 && $hgf != 2) {
    				$step = $horse + $horse_general_formula[$hgf];

		    		$horse_steps[] = $step;
    			}		    		
			}
		} else if (in_array($horse, $horse_left_2)) {
			for ($hgf = 0; $hgf < count($horse_general_formula); $hgf++) { 
    				
    			if ($hgf != 1) {
    				$step = $horse - $horse_general_formula[$hgf];

    				$horse_steps[] = $step;
    			}	
    			if ($hgf != 0) {
    				$step = $horse + $horse_general_formula[$hgf];

		    		$horse_steps[] = $step;
    			}	    		
			}
		} else if (in_array($horse, $horse_right_1)) {
			for ($hgf = 0; $hgf < count($horse_general_formula); $hgf++) { 
    				
    			if ($hgf != 0 && $hgf != 2) {
    				$step = $horse - $horse_general_formula[$hgf];

    				$horse_steps[] = $step;
    			}	
				if ($hgf != 1 && $hgf != 3) {
    				$step = $horse + $horse_general_formula[$hgf];

		    		$horse_steps[] = $step;
    			}		    		
			}
		} else if (in_array($horse, $horse_right_2)) {
			for ($hgf = 0; $hgf < count($horse_general_formula); $hgf++) { 
    				
    			if ($hgf != 0) {
    				$step = $horse - $horse_general_formula[$hgf];

    				$horse_steps[] = $step;
    			}	
    			if ($hgf != 1) {
    				$step = $horse + $horse_general_formula[$hgf];

		    		$horse_steps[] = $step;
    			}	    		
			}
		} else {
			for ($hgf = 0; $hgf < count($horse_general_formula); $hgf++) { 
    				
    			$step_1 = $horse - $horse_general_formula[$hgf];
    			$step_2 = $horse + $horse_general_formula[$hgf];

    			array_push($horse_steps, $step_1, $step_2);
			}
		}

    	$horse_steps_count = count($horse_steps);
    	
    ?>

    <style>
    	@import url(fontawome/css/all.css);

	    table {
	    	margin: auto;
	    	border: 1px solid #000;
	    }
	    table td{
	    	width: 70px;
	    	height: 70px;
	    	text-align: center;
	    	vertical-align: middle;
	    }
		.siyah {
			background-color:#000;
			color:#FFF;
		}

		<?= 'td.'.$horse_square; ?>{
			
		}
		<?= 'td.'.$horse_square; ?>:before{
			font-family: 'Font Awesome 5 Free';
  			font-weight: 900; 
  			content: "\f441";;
  			font-size: 40px;
  			color:#2DB200;
		}

		<?php
			for ($hs=0; $hs < $horse_steps_count; $hs++) { 
				echo 'td.square_'.$horse_steps[$hs].'{
					background: #ff0000 !important;
				}';
			}
		?>
	</style>


    
</head>

<body>
	
	<?php 
		echo '<table>';
		$sayac=1;

		for($i = 1; $i <= 8; $i++){
			echo '<tr>';

				for($j = 1; $j <= 8; $j++){
					
					$t = $i + $j;
					


					if($t % 2 == 1) { 
						echo '<td class="siyah square_'.$sayac.'"></td>'; 
					} else { 
						echo '<td class="square_'.$sayac.'"></td>';
					}
					$sayac++;
				}
			
			echo '</tr>';
		}
		echo '</table>';
	?>
	
</body>

</html>