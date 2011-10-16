<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 0)
	{
		echo '<Say>Taking you back to the main menu</Say>';
		echo '<Redirect>handle-incoming-call.xml</Redirect>';
	}
	# @start snippet
	else if ($user_pushed == 1)
	{
		echo '<Say>Connecting you to agent 1.</Say>';
		echo '<Dial>+1NNNNNNNNNN</Dial>';
	}
	# @end snippet
	else if ($user_pushed == 2)
	{
		echo '<Say>Connecting you to agent 2.</Say>';
		echo '<Dial>+1NNNNNNNNNN</Dial>';
	}
	else {
		echo "<Say>Sorry, that extension is unknown.</Say>";
		echo '<Redirect method="GET">handle-user-input.php?Digits=2</Redirect>';
	}

	echo '</Response>';
?>
