<?php
	class Apples {
		public function bar() {
			echo 'Food';
			
			return this;//This allows the method to link to the another method.		
		}	
		
		public function baz() {
			echo 'Saladbar';		
		}
	}
?>