<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$user_pushed = (int) $_REQUEST['Digits'];

	if ($user_pushed == 1)
	{
		echo '<Dial>+12126073300</Dial>';
	}
	# @start snippet
	else if ($user_pushed == 2)
	{
		echo '<Dial>+12126796018</Dial>';
	}
	
	else if ($user_pushed == 3)
	{
		echo '<Dial>+12126399675</Dial>';
	}
	# @end snippet
	
	else if ($user_pushed == 4)
	{
		echo '<Dial>+12124428833</Dial>';
	}
	
	else if ($user_pushed === 5)
	{
		echo '<Dial>+12127887210</Dial>';
	}
		
	else if ($user_pushed == 805)
	{
		echo '<Dial>+16465304568</Dial>';
	}
	else {
		// We'll implement the rest of the functionality in the 
		// following sections.
		echo "<Say>Sorry, I can't do that yet.</Say>";
		echo '<Redirect>ows-handle-incoming-call.xml</Redirect>';
	}

	echo '</Response>';
?>