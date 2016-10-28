<?php
	
	class rules{
		
		public function checkRules($dice){	
			
			$copiaDice = array_count_values($dice);
			$currentMax = 0;
			$currentKey = 0;
			
			$comma_separated = implode(",", $dice);
			
			if($comma_separated == '1,2,3,4,5'){
				return 40;
			}
			if($comma_separated == '2,3,4,5,6'){
				return 50;
			}
			
			if(isset($copiaDice)) {
				foreach ($copiaDice as $key => $value){
					echo "Chave $key <br>";
					echo "Valor $value <br>";
					
					if($value == 3 && $currentMax == 2){
						return 25;	
					}
					
					if(($value > $currentMax) || ($value == $currentMax && $key > $currentKey)){
						$currentMax = $value;
						$currentKey = $key;
					}					
				}
				
				if($currentMax == 2){
					switch ($currentKey){
						case 1:
							return 2;
						case 2:
							return 4;
						case 3:
							return 6;
						case 4:
							return 8;
						case 5:
							return 10;
						case 6:
							return 12;
					}
				} else if($currentMax == 3){
					return array_sum($dice);
				} else if($currentMax == 4){
					return array_sum($dice);
				} else if($currentMax == 5){
					return 50;
				}
				
				return 0;
				
			} 
		
		}
		
	}