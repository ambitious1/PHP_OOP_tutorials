<?php
	class Calculator {
		protected $result;
		
		protected $operation;
		
		public function setOperation(OperatorInterface $operation) {//validates that you only use objects like new Adder,new Subtractor, etc
			$this->operation = $operation;				
		}	
		
		public function calculate() {
			//print_r(func_get_args());
			
			foreach(func_get_args() as $number)
			{
				$this->result = $this->operation->run($number, $this->result);			
			}		
		}
		
		public function getResult() {
			return $this->result;		
		}
	}
?>