<?php
	require 'Bird.php';
	require 'Pigeon.php';
	require 'Penguin.php';
		
	$pigeon = new Penguin(false, 2);
	
	echo $pigeon->getLegCount();
	/*if ($pigeon->canFly) {
		echo 'The Pigeon can Fly';	
	}*/
?>