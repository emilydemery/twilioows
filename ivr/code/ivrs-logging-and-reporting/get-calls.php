<?php
	$db = new PDO('sqlite:ivr.sqlite');

	$result = $db->query('SELECT caller, datetime(call_time) AS call_time FROM calls');

	echo '<ul>';

	foreach ($result as $row)
	{
		echo '<li>A call came in on '.$row['call_time'].' from '.$row['caller'].'</li>';
	}

	echo '</ul>';
?>
