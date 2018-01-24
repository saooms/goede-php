<?php

	date_default_timezone_set("Europe/Amsterdam");

	$time = date(H);


	if ($time > 5 and $time < 12) {
		$text = "Goede morgen!<br>het is nu: ";
		$img = "img/morning.png";
	}

	elseif ($time > 11 and $time < 19) {
		$text = "Goede middag!<br>het is nu: ";
		$img = "img/afternoon.png";
		$fly = "img/plane.png";
		$ID = "plane";
	}

	elseif ($time > 18 and $time <= 24) {
		$text = "Goede avond!<br>het is nu: ";
		$img = "img/evening.png";
	}

	elseif ($time >= 0 and $time < 6) {
		$text = "Goede nacht!<br>het is nu: ";
		$img = "img/night.png";
		$fly = "img/UFO.png";
		$ID = "UFO";
	}
		
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" type="text/css" href="1.css">
		<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
	</head>
	<body background= "<?php echo $img; ?>">

		<img src="<?php echo $fly; ?>" id="<?php echo $ID; ?>">

		<p>	<?php echo $text.date("H:i");?></p>

		
			
	</body>
</html>