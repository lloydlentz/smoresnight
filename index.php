<?php 
	//  Set the current date
	$date = new DateTime('now', new DateTimeZone('America/Chicago'));
	//  Define a collection of next dates that smores night should be
        $nextDates = array(
        	'2019-09-06',
        	'2019-08-23',
        	'2019-08-09',
                '2019-07-26',
		'2019-07-12',
		'2019-06-28',
		'2019-06-14',
		'2019-01-01'
	);

	$nextDate = "";  // placeholder for the next date, to show on page
	$today = false;  // Set the variable if it is today
	// Loop through the array of dates and see when the next one will be
	foreach ($nextDates as $i => $d) {
		if ($date->format('Y-m-d') == $d) {
			$today = true;
		} elseif ($date->format('Y-m-d') < $d ) {
			$nextDate = $d;
		}
	}

	//  What to display if it is TODAY
	if($today){ ?>
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
	//  What to display if it is NOT TODAY
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
<!-- 		<div id="days">Check back in <?php echo $days; ?> days. </div> -->
		<div id="days">Next smores night is on <?php echo date("l, M j", strtotime($nextDate)) ?>. </div>
		<div class="lazy"><a href="form.php" title="">signup to get texts</a></div>
	</div>
	<script src="script.js"></script>
</body>
</html>
<?php 
 	}

?>

