<?php
	require 'Collection2.php';
	
	$grp = new Collection2();
	
	$grp->add('apple');
	$grp->add('oranges');
	$grp->add('banana');
	
	
	//What to perform a count() method to count the elements in list, but since there is
	//echo count($grp); 
	//1 object assigned to $grp, it equals 1, instead of counting the items in the collection
	//You must use the Countable interface	
	
	$grp->baz = 'qux';
	
	echo $grp->get('baz').'<br><br>';
	
	echo $grp->foo('obj0','obj1','obj2','obj3','obj4');	
	
	echo '<pre>' . print_r($grp->all(), true); //we need to implement the JsonSerialize interface
?>