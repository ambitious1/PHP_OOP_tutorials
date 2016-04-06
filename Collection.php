<?php
class Collection implements Countable, JsonSerializable {
	protected $items = [];
	
	//append items to list
	public function add($val) {
		$this->items[] = $val;	
	}
	
	//insert items at specified key
	public function set($key, $val) {
		$this->items[$key] = $val;	
	}
	
	//print out list in Json format
	public function JsonSerialize() {//must be called JsonSerialize
		return json_encode($this->items);
	}
	
	public function count() {
		return count($this->items);	
	}
	
}	
?>