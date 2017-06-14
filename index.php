<?php 
	$date = new DateTime('now', new DateTimeZone('America/Chicago'));
	$nextDate = "2017-06-16";
	$yes = ($date->format('Y-m-d') ==$nextDate); 
	if($yes){ ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Is It Smores Night?</title>
 	<link rel=icon href=favicon.png>
	<style>
		html, body { height: 100%; }
		body { margin: 0; font-size: 10em;}
		div { display: flex; flex-direction: row; align-items: center; justify-content: center;height: 100%; }
		img { width: 70%; }
	</style>
</head>
<body>
	<div><img src=yes.png></div>
</body>
</html>

<?php	
 	} else {
		$now = time(); // or your date as well
		$your_date = strtotime($nextDate);
		$datediff =  $your_date - $now;
		$days = floor($datediff / (60 * 60 * 24)) + 1;
?>
<!DOCTYPE html>
<html>
<head>
 	<title>Is It Smores Night?</title>
 	<link rel=icon href=favicon.png>

	<style>
		html, body { height: 100%; }

		body { margin: 0; font-size: 10em;}
		#time{display:block;clear:both; font-size: .2em;}
		#days{font-size: .2em}
		.lazy{font-size: .15em; color: blue; cursor: pointer;}
		.signup{display: none; font-size: .3em;}
		.flexcontainer{display:-webkit-flex;display:flex;-webkit-flex-direction:row;flex-direction:row;height: 100%}
		.flexcontainer.column{-webkit-flex-direction:column;flex-direction:column}
		.flexcontainer.row.center,.flexcontainer.column.center{-webkit-align-items:center;align-items:center;-webkit-justify-content:center;justify-content:center}

	</style>
</head>
<body>
	<div class="flexcontainer column center">
		<div class="ans">NO</div>
		<div id="days">check back in <?php echo $days; ?> days</div>
		<div class="lazy"><a href="form.php" title="">signup</a></div>
	</div>
	<script src="script.js"></script>
</body>
</html>
<?php 
 	}

?>

