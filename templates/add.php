<?php

require_once 'model.php';

$name = $_POST['name'];
$info = $_POST['info'];
	
	$link = open_database_connection();
	$query = 'INSERT INTO post (id, title, date, body) VALUES (NULL, '.$name.', CURRENT_TIMESTAMP, '.$info.')';
	
	if ($link->query($query) === TRUE) {

    	echo "funciona";
	} else {

	    echo "No funciona";
	}

	close_database_connection($link);

?>