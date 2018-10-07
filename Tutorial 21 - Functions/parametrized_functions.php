<?php
	function print_name($name, $age, $gender = 'Male'){
		echo "This is {$name} aged  {$age} yrs and I am {$gender}";
	}

	print_name("John Doe", 34);
?>