<?php
	require 'Kiwi.php';
	
	
	//Doesn't require to be instantiated with the new keyword
	echo Kiwi::hello();//Similar to the scope operator but only works for static methods and and variables
	echo Kiwi::$var;
	//echo Kiwi::$var2 //won't work because it is not a static property  	
?>