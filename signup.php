<?php 
		///  TWILIO PART
		// Required if your environment does not handle autoloading
		require __DIR__ . '/vendor/autoload.php';
		require 'settings.php';

		// Use the REST API Client to make requests to the Twilio REST API
		use Twilio\Rest\Client;

	if ($_GET["phone"]){

		$number = filter_var($_GET["phone"], FILTER_SANITIZE_NUMBER_INT);
		//print($number);

		$sql = "Insert into smoresfolks(number) values ('$number')";

		if ($db->query($sql) === TRUE) {
			// echo $sql;
		} else {
			echo "Error: " . $sql . "<br>" . $db->error;
		}



		$twilioclient = new Client($twiliosid, $twiliotoken);
		// Use the client to do fun stuff like send text messages!
		$twilioclient->messages->create(
			// the number you'd like to send the message to
			'+1' . $number,
			array(
				// A Twilio phone number you purchased at twilio.com/console
				'from' => '+13213334488 ',
				// the body of the text message you'd like to send
				'body' => "Thanks for signing up. I'll shoot you a note when its smores night.!\n -Lloyd and team. ",
				// 'mediaUrl' => "https://c1.staticflickr.com/3/2899/14341091933_1e92e62d12_b.jpg",
				'mediaUrl' => "http://isitsmoresnight.com/cat.jpg",
			)
		);
	}


	header("Location: thanks.jpg"); /* Redirect browser */
	exit();
?>
