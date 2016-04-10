<?php
class Collection2 implements Countable, JsonSerializable {
	protected $items = [];
	
	//__set()
	//__get()
	//__call()
	//__toString()		
	
	//This sets the variable name in the list[] to whatever the parameter name is and the value as well
	public function __set($key, $value) {
		$this->set($key,$value);	
	}	
	
	//This retrieves the value of the key specified in the list
	public function __get($value) {
		return $this->get($value);
	}
	
	public function __call($func, $args) {
		echo $func . ' has been called with arguments ' . implode(', ', $args);	
	}
	
	
	//append items to list
	public function add($val) {
		$this->items[] = $val;	
	}
	
	public function __toString() {
			return $this->jsonSerialize();
	}
	
	public function get($key) {
		return array_key_exists($key, $this->items) ? $this->items[$key] : null;	
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
	
	public function all() {
			return $this->items;
	}
	
}	
?>