<?php
	session_start();
	require_once("functions.php");

	$linktext = flashclean($_POST, "link");
	$commenttext = flashclean($_POST, "comment");

	$link = mysql_connect("localhost", "user" , "pass");
	if(!$link){
		$_SESSION['message'] = "Connection error!";
		}

	$db = mysql_select_db("laborec");
	if(!$db){
		$_SESSION['message'] = "DB selection error!";
		}


	$sql = "INSERT INTO links (link, comment)VALUES('{$linktext}','{$commenttext}')";
		if(!mysql_query($sql)){
			$_SESSION['message'] = "Query error!";
			mysql_close($link);
			header("Location: index.php");
			exit();
		}else{
			mysql_close($link);
			$_SESSION['message'] = "Your link was succesfully added to the linkspage!";
			header("Location: index.php");
			exit();
		}




