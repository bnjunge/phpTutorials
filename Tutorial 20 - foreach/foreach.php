<?php
	$arrayA = array('John', 'Doe', 23, 'Male');

	foreach($arrayA as $value){
		//echo $value. "<br />";
	}

	$arrayB = array('fname' => 'John', 'lname' => 'Doe', 'age' => 23, 'gender' => 'Male');

	foreach($arrayB as $key => $value){
		if($key === 'lname'){
			$key = 'Last Name';
		}
		if($key === 'fname'){
			$key = 'First Name';
		}
		echo "{$key} is {$value} <br />";
	}











?>