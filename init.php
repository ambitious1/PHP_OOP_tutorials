<?php
	//Rather than reqriting the require_once statements you can autoload the module needed bases on the class name given, dynamically 
	spl_autoload_register(function($class){
		require_once "classes/{$class}.php";	
	});
	
?>