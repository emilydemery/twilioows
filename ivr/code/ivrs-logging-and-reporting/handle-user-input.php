<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 1)
	{
		echo '<Say>Our store hours are 8 AM to 8 PM everyday.</Say>';
	}
	else if ($user_pushed == 2)
	{
		echo '<Gather action="handle-extension.php" numDigits="1">';
		echo "<Say>Please enter your party's extension.</Say>";
		echo '<Say>Press 0 to return to the main menu</Say>';
		echo '</Gather>';
		echo "<Say>Sorry, I didn't get your response.</Say>";
		echo '<Redirect method="GET">handle-user-input.php?Digits=2</Redirect>';
	}
	else if ($user_pushed == 3)
	{
		# @start snippet
		echo '<Gather action="handle-tracking-number.php" numDigits="4">';
		echo '<Say>Please enter your four digit tracking number</Say>';
		echo '</Gather>';
		# @end snippet
	}
	else {
		echo "<Say>Sorry, that isn't a valid menu option.</Say>";
		echo '<Redirect>handle-incoming-call.php</Redirect>';
	}

	echo '</Response>';
?>
