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
	else if ($user_pushed == 1)
	{
		# @start snippet
		echo '<Say>Connecting you to agent 1. All calls are recorded.</Say>';
		echo '<Dial record="true">';
		echo '<Number url="screen-caller.xml">+1NNNNNNNNNN</Number>';
		echo '</Dial>';
		# @end snippet
	}
	else if ($user_pushed == 2)
	{
		echo '<Say>Connecting you to agent 2. All calls are recorded.</Say>';
		echo '<Dial record="true">';
		echo '<Number url="screen-caller.xml">+1NNNNNNNNNN</Number>';
		echo '</Dial>';
	}
	else {
		echo "<Say>Sorry, that extension is unknown.</Say>";
		echo '<Redirect method="GET">handle-user-input.php?Digits=2</Redirect>';
	}

	echo '</Response>';
?>
