<?php
	class RandomOneDarray {
	  	
		protected $rangeFrom;
		protected $rangeTo;
		protected $arrayValue;
		protected $arrayIntersect;

	   function __construct(int $length, $rangeFrom, $rangeTo) {
	    	$length = abs($length);	
	       	$this->rangeFrom = abs($rangeFrom);
	       	$this->rangeTo = abs($rangeTo);
	      	$this->fillRandom($length);
	   }

	   	protected function fillRandom(int $length) {
	   		$this->arrayValue = array();
	   		for ($j=0; $j < $length; $j++) { 		
				$this->arrayValue[$j] = rand($this->rangeFrom,$this->rangeTo);
			}
	   	}

		public function getArray() {
			return $this->arrayValue;
		}

		public function makeArrayIntersect($arrayToIntersect) {
			$this->arrayIntersect = array_intersect ($this->arrayValue, $arrayToIntersect);
		}

		public function getArrayIntersect() {
			return $this->arrayIntersect;
		}

	}

	class RandomMatrix extends RandomOneDarray {
		protected $colTotalNum;
		protected $rowTotalNum;
		
		function __construct(int $colTotalNum, int $rowTotalNum, $rangeFrom, $rangeTo) {
	    	$this->colTotalNum = abs($colTotalNum);	
	    	$this->rowTotalNum = abs($rowTotalNum);
	       	$this->rangeFrom = abs($rangeFrom);
	       	$this->rangeTo = abs($rangeTo);
	      	$this->fillRandom();
	   }

	   	protected function fillRandom() {
	   		$this->arrayValue = array();

	   		for ($i=0; $i < $this->rowTotalNum; $i++) { 
	   			$this->arrayValue[$i] = array();
	   			for ($j=0; $j < $this->colTotalNum ; $j++) { 		
					$this->arrayValue[$i][$j] = rand($this->rangeFrom,$this->rangeTo);
				}
	   		}
	   	}

	   	public function makeArrayIntersect($arrayToIntersect) {
			 
			for ($i=0; $i < $this->rowTotalNum; $i++) { 
				$a = $this->arrayValue[$i];
				$this->arrayIntersect[$i] = array_intersect ($a, $arrayToIntersect);
			}
		}

		public function getRowTotalNum() {
			return $this->rowTotalNum;
		}

		public function getColTotalNum() {
			return $this->colTotalNum;
		}

	}
?>