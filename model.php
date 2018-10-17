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
	$link = new mysqli("localhost", "blogadmin", "blogadmin", "blog_db");
	
	$q = "INSERT INTO post (id, title, date, body) VALUES (NULL, '$name' , CURRENT_TIMESTAMP, '$info')";
	
	if (strlen ($name)>5) {
		if (strlen($info)>50) {
			if ( !$link->query($q) ) {
    			echo '<script>window.alert("Algo ha salido mal con la conexion a la DB :(");</script>';
    		} else {
    			echo '<script>window.alert("Post añadido con exito!")</script>';
    		}
		} else {
			echo '<script>window.alert("Cuentanos un poco mas sobre tu coche! (min 50 caracteres)");</script>';
		}
	} else {
		echo '<script>window.alert("Pero que nombre mas pequeño no? (min 5 caracteres)");</script>';
	}
	
	

}

?>
