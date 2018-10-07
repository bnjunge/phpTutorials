<?php


	if($_SERVER['PHP_AUTH_USER'] !== 'admn' && $_SERVER['PHP_AUTH_PW'] !== 'YES'){
		header("WWW-Authenticate: Basic");
		header("HTTP\ 1.0 401 Unauthorized");
		die('Access Denied');
	}
	else{
		echo 'Logged in';
	}