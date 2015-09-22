<?php
class BMIService {
    public static function getIndex($weight, $height) {
        return $weight / ($height * $height);
    }
    
    public static function getDescription($Index){
       
       	if($Index <17){
			$result = "Muito abaixo do peso";
		}
		else if($Index <= 18.49){
			$result = "Abaixo do peso";
		}
		else if($Index <= 24.99){
			$result = "Peso normal";
		}
		else if($Index <= 29.99){
			$result =  "Acima do peso";
		}
		else if($Index <= 34.99){
			$result = "Obesidade I";
		}
		else if($Index <=39.99){
			$result = "Obesidade II";
		}
		else{
			$result = "Obesidade III";
		}
		
		return $result;
    }
}
?>