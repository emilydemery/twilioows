<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	echo '<Response>';

	$tracking_number = $_REQUEST['Digits'];

	if (strlen($tracking_number) == 4)
	{
		$db = new PDO('sqlite:ivr.sqlite');

		$stmt = $db->prepare('SELECT status FROM packages WHERE tracking_number=?');
		$stmt->execute(array($tracking_number));
		
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($result)
		{
			echo '<Say>Your package status is '.$result['status'].'.</Say>';
		}
		else {
			echo "<Say>Sorry, I couldn't find that tracking number.</Say>";
			echo '<Redirect method="GET">handle-user-input.php?Digits=3</Redirect>';
		}
	}
	else {
		echo "<Say>Sorry, that isn't a valid tracking number.</Say>";
		echo '<Redirect method="GET">handle-user-input.php?Digits=3</Redirect>';
	}

	echo '</Response>';
?>
