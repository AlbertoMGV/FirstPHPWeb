<?php
// index.php
// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

// route the request internally
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/index.php') {
	list_action();
}
elseif ($uri == '/') {
	list_action();
}
elseif ($uri == '/add.php') {
	add($_POST['name'],$_POST['info']);
}
elseif (strstr($uri, '/show') && isset($_GET['id'])) {
	show_action($_GET['id']);
}
else {

	error();
	
}
?>