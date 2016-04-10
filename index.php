<?php
	require_once 'init.php';
	
	
	$x = new Calculator;
	
	$x->setOperation(new Adder);
	$x->calculate(10,50); //60
	
	$x->setOperation(new Subtractor);
	$x->calculate(30);//30
	
	$x->setOperation(new Multiplier);
	$x->calculate(5);//150
	
	$x->setOperation(new Divider);
	$x->calculate(2);//75
		
	
	echo $x->getResult();
?>