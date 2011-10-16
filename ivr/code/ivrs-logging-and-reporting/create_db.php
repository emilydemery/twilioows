<?php
	# @start snippet
	$db = new PDO('sqlite:ivr.sqlite');

	$db->exec('CREATE TABLE calls (id INTEGER PRIMARY KEY, caller TEXT, call_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP);');

	if (file_exists('ivr.sqlite'))
	{
		echo 'Database and tables created.';
	}
	else {
		echo 'Database was not created. Please check to make sure this directory is writeable.';
	}

	# @end snippet

	// Create the packages table in case it wasn't created in 1.4
	$db->exec('CREATE TABLE IF NOT EXISTS packages (id INTEGER PRIMARY KEY, tracking_number TEXT, status TEXT);');

	// Populate it with some data
	$db->exec("INSERT INTO packages (tracking_number, status) VALUES ('1234', 'in transit');");
	$db->exec("INSERT INTO packages (tracking_number, status) VALUES ('4321', 'shipped');");
?>
