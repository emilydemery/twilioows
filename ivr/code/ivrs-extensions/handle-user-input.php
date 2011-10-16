<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 1)
	{
		echo '<Say>Our store hours are 8 AM to 8 PM everyday.</Say>';
	}
	# @start snippet
	else if ($user_pushed == 2)
	{
		echo '<Gather action="handle-extension.php" numDigits="1">';
		echo "<Say>Please enter your party's extension.</Say>";
		echo '<Say>Press 0 to return to the main menu</Say>';
		echo '</Gather>';
		echo "<Say>Sorry, I didn't get your response.</Say>";
		echo '<Redirect method="GET">handle-user-input.php?Digits=2</Redirect>';
	}
	# @end snippet
	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>Sorry, I can't do that yet.</Say>";
		echo '<Redirect>handle-incoming-call.php</Redirect>';
	}

	echo '</Response>';
?>
