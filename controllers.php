<?php
// controllers.php

function list_action()
{
	$posts = get_all_posts();
	require 'templates/list.php';
}

function show_action($id)
{
	$post = get_post_by_id($id);
	require 'templates/show.php';
}

function error()
{
	require 'templates/error.php';
}

function add($name,$info)
{
	$kp = addPost($name,$info);
	$posts = get_all_posts();
	require 'templates/list.php';
}


?>