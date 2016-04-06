<?php
	require 'TalkInterface.php'; //must go first
	require 'Dog.php';
	require 'Cat.php';
	
	
	$cat = new Cat();
	$dog = new Dog();
	
	echo $cat->talk() . '<br>' . $dog->talk();
?>