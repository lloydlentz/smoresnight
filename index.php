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
		<div class="lazy" onclick="show('signup');hide('lazy');">signup</div>
		<div class="signup">Enter your cell... I'll text you.</div>
		<div class="signup">
			<form action="signup.php"><input name="phone" value="phone"><input type="submit" name="submit" value="Text Me"></form>
			<form>
				<h1>Material Design Text Input With No Extra Markup</h1>
				<input placeholder="Username" type="text" required="">
				<input placeholder="Password" type="password" required="">
				<button>Submit</button>
			</form>

			<a class="follow" href="https://twitter.com/mildrenben" target="_blank"><i class="fa fa-twitter"></i>Follow Me</a>

			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

			<link href='https://fonts.googleapis.com/css?family=Roboto:400' rel='stylesheet' type='text/css'>
		</div>
	</div>
	<script src="script.js"></script>
	<script>
		window.onload = function () {
		    var fiveMinutes = 60 * 5,
	        display = document.querySelector('#time');
	    	// startTimer(fiveMinutes, display);
		}
		;
	</script>
</body>
</html>
<?php 
 	}

?>

