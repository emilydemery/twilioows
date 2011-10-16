<?php
	$db = new PDO('sqlite:ivr.sqlite');

	// Create the SQLite table
	$db->exec('CREATE TABLE packages (id INTEGER PRIMARY KEY, tracking_number TEXT, status TEXT);');

	// Populate it with some data
	$db->exec("INSERT INTO packages (tracking_number, status) VALUES ('1234', 'in transit');");
	$db->exec("INSERT INTO packages (tracking_number, status) VALUES ('4321', 'shipped');");

	if (file_exists('ivr.sqlite'))
	{
		echo 'Database and tables created.';
	}
	else {
		echo 'Database was not created. Please check to make sure this directory is writeable.';
	}
?>
