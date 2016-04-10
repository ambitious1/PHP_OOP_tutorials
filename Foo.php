<?php

//Abstract classes can't be instantiated
	abstract class Foo {
		public function bar() {
			return 'foobar';	
		}
		
		abstract public function baz(); //abstract methods don't have definitions 
	}
?>