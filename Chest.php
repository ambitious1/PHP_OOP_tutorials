<?php
	class Chest {
		protected $lock;	
		protected $isClosed;	
		
		public function __construct(Lock $lock) { //validates that no random string is entered as a parameter, but an instance of lock
			$this->lock = $lock;		
		} 		
		
		public function close($lock = true) {		
			if ($lock === true) { 			
				$this->lock->lock();
			}
			
			$this->isClosed = true;
			
			echo 'closed';			
		}
		
		public function isClosed() {
			return $this->isClosed;		
		}
		
		public function open(){
			if ($this->lock->isLocked()){
				$this->lock->unlock();
			}		
			
			$this->isClosed = false;
			echo 'open';		
		}
}
?>