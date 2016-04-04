<?php
	require 'Person1.php';
	
	$person = new Person1;
	
	$person->name = 'Travis';
	
	$person->age = 24;
	
	echo $person->sentence();
?>