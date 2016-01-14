<?php

function flashclean($array, $index) {
	if (isset($array["{$index}"])) {
	 $text = ereg_replace("&", "and", $array["{$index}"]);
	 $text = ereg_replace("'", "", $text);
	 $output = ereg_replace("=", "is", $text);
	 return ($output);
	}
	return NULL;
}

//clean user data functions (ref. O'Reilly PHP-MySQL p.200)
function mysqlclean($array, $index, $maxlength) {
	if(isset($array["{$index}"])) {
		$input=substr($array["{$index}"], 0, $maxlength);
		$input=mysql_real_escape_string($input);
		return ($input);
	}
	return NULL;
}
function shellclean($array, $index, $maxlength) {
	if (isset($array["{$index}"])) {
	 $input=substr($array["{$index}"], 0, $maxlength);
	 $input=escapeshellarg($input);
	 return ($input);
	}
	return NULL;
}

function do_dump($var) {
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
}




