<?php
	$mysqli = new mysqli("db", "user", "passpass", "myDb");
	$mysqli->set_charset("utf8");

	$salt = "...salt";
	
	$out = [];
	
	$out['code'] = 0;
?>