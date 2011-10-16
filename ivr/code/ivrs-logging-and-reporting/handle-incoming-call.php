<?php
	header('Content-type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8"?>';

	# @start snippet
	$db = new PDO('sqlite:ivr.sqlite');

	$stmt = $db->prepare('INSERT INTO calls (caller) VALUES (?)');
	$stmt->execute(array($_REQUEST['From']));
	# @end snippet
?>
<Response>
	<Gather action="handle-user-input.php" numDigits="1">
		<Say>Welcome to TPS.</Say>
		<Say>For store hours, press 1.</Say>
		<Say>To speak to an agent, press 2.</Say>
		<Say>To check your package status, press 3.</Say>
	</Gather>
	<!-- If customer doesn't input anything, prompt and try again. -->
	<Say>Sorry, I didn't get your response.</Say>
	<Redirect>handle-incoming-call.xml</Redirect>
</Response>
