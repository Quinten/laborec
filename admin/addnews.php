<?php
	session_start();
	require_once("functions.php");

	$titletext = flashclean($_POST, "title");
	$authortext = flashclean($_POST, "author");
	$bodytext = flashclean($_POST, "body");
	$linktext = flashclean($_POST, "link");

	$date = date("d-m-y");

	$link = mysql_connect("localhost", "user", "pass");
	if(!$link){
		$_SESSION['message'] = "Connection error!";
		}

	$db = mysql_select_db("laborec");
	if(!$db){
		$_SESSION['message'] = "DB selection error!";
		}


	$sql = "INSERT INTO news (title, author, body, link, date)VALUES('{$titletext}','{$authortext}','{$bodytext}','{$linktext}','".$date."')";
		if(!mysql_query($sql)){
			$_SESSION['message'] = "Query error!";
			mysql_close($link);
			header("Location: index.php");
			exit();
		}else{
			mysql_close($link);
			$_SESSION['message'] = "Your message was succesfully added to the newspage!";
			header("Location: index.php");
			exit();
		}




