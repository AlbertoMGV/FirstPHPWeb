<?php
// model.php
function open_database_connection()
{
	$link = mysqli_connect('localhost', 'blogadmin', 'blogadmin', 'blog_db');	
	return $link;
}

function close_database_connection($link)
{
	//mysqli_close($link);
	$link->close();
}

function get_all_posts()
{
	$link = open_database_connection();

	$result = mysqli_query($link, 'SELECT id, title FROM post');
	$posts = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$posts[] = $row;
	}
	
	close_database_connection($link);
	
	return $posts;
}
function get_post_by_id($id)
{
	$link = open_database_connection();

	$id = intval($id);
	$query = 'SELECT date, title, body FROM post WHERE id='.$id;
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_assoc($result);

	close_database_connection($link);

	return $row;
}

function addPost($name,$info)
{
	

	$link = open_database_connection();
	$query = 'INSERT INTO post (id, title, date, body) VALUES (NULL, "'.$name.'", CURRENT_TIMESTAMP, "'.$info.'"")';



	if (mysqli_query($link, $query)) {
		echo '<script>';
	  	echo 'console.log("INSERTADO")';
	  	echo '</script>';
    	return "funciona";
	} else {
		echo '<script>';
	  	echo 'console.log("ERRO")';
	  	echo '</script>';
	    return "No funciona";
	}

	close_database_connection($link);
}



?>
