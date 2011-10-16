<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	# @start snippet
	$user_pushed = (int) $_REQUEST['Digits'];
	# @end snippet

	if ($user_pushed == 0)
	{
		echo '<Say voice="woman">Taking you back to the main menu</Say>';
		echo '<Redirect>ows-handle-incoming-call.xml</Redirect>';
	}
	# @start snippet
	else if ($user_pushed == 1)
	{
		echo '<Say voice="woman">Connecting you to N Y C L U  Arrest Hotline.</Say>';
		echo '<Dial>+12126073300</Dial>';
	}
	# @end snippet
	else if ($user_pushed == 2)
	{
		echo '<Say voice="woman">Connecting you to National Loyers Guild  Arrest Hotline.</Say>';
		echo '<Dial>+12126796018</Dial>';
	}
	else if ($user_pushed == 3)
	{
		echo '<Say voice="woman">Connecting you to Citizens Complaint Review Board.</Say>';
		echo '<Dial>+12124428833</Dial>';
	}
	else if ($user_pushed == 4)
	{
		echo '<Say voice="woman">Connecting you to City Council hotline.</Say>';
		echo '<Dial>+12127887210</Dial>';
	}
	else {
		echo "<Say voice="woman">Sorry, please enter your selection again.</Say>";
		echo '<Redirect method="GET">ows-handle-extension.php</Redirect>';
	}

	echo '</Response>';
?>
