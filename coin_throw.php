<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="coin_throw.css">
	<title>Coin Throw</title>
</head>
<body>
	<?php
		$heads = 0;
		$tails = 0;
		$coin_flip = 0;

		for ( $i = 1 ; $i <= 5000 ; $i++){
			$coin_flip = rand(0,1);

			if($coin_flip == 0){
				$heads++;

				echo "Attempt #" . $i . ": Throwing a coin...It's a head! ... Got $heads heads(s) so far and $tails tail(s) so far<br>";
			}

			else{
				$tails++;

				echo "Attempt #" . $i . ": Throwing a coin...It's a tail! ... Got $heads heads(s) so far and $tails tail(s) so far<br>";
			}
		}

		echo "<h1>Ending the program - thank you!</h1>";
	?>
</body>
</html>