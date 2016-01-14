<?php

	session_start();
	require_once("functions.php");

	$titletext = flashclean($_POST, "title");
	$uploaddir = "/absolute/path/to/laborec/samples/";
	$filename = trim($_FILES['upfile'] ['name']);
	$filename = ereg_replace(" ", "", $filename);

	if(ereg(".zip", $filename)){
		$uploadfile = $uploaddir . $filename;
		if (move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)){
			$link = mysql_connect("localhost", "user", "pass");
			if(!$link){
				$_SESSION['message'] = "Connection error!";
			}
			$db = mysql_select_db("laborec");
			if(!$db){
				$_SESSION['message'] = "DB selection error!";
			}
			$sql = "INSERT INTO samples (title, file)VALUES('{$titletext}','".$filename."')";
			if(!mysql_query($sql)){
				$_SESSION['message'] =  "Query error!";
				mysql_close($link);
			}else{
				mysql_close($link);
				$_SESSION['message'] = "File upload was successfull!";
			}
		}else{
			$_SESSION['message'] = "File upload failed!";
		}
	}else{
		$_SESSION['message'] = "Only zipped files are allowed, upload failed!";
	}
	header("Location: index.php");
	exit();




