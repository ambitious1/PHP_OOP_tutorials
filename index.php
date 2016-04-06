<?php
	require 'Collection.php';
	
	$grp = new Collection();
	
	$grp->add('apple');
	$grp->add('oranges');
	$grp->add('banana');
	
	
	//What to perform a count() method to count the elements in list, but since there is
	//echo count($grp); 
	//1 object assigned to $grp, it equals 1, instead of counting the items in the collection
	//You must use the Countable interface	
	
	echo $grp->toJson().'<br>';
	echo count($grp).'<br>';
	echo json_encode($grp); //we need to implement the JsonSerialize interface
?>