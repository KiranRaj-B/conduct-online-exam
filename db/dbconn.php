<?php
	// db connection
	$conn = new mysqli('localhost', 'root', '', 'online_exam');

	if(!$conn)
	{
		die("Fatal Error: Connection Error!");
	}
?>
