<?php
	/**
	* Function that generates an array containing all values combinations of two array.
	* @author Claudia MENDOZA
 	* @return the combined array
	*/
	function mergeArrays(Array $viandes, Array $cuissons){
		$commande=array();
		foreach($viandes as $viande){ 
			foreach($cuissons as $cuisson) { 
				array_push($commande,$viande." ".$cuisson); 
			}
		}
		return $res;
	}
	
	/**
	* Function that splits an array for every 'space' character.
	* @author Alexandre BEAUVERGER
	* @return an array
	*/
	function stringToArray(String $str){
		$result = preg_split("/[\s,]+/", $str);
		return $result;
	}


	/**
	* Function that returns the last two records of an array.
	* @author Marine CORMIER
	* return an array
	*/
	function lastTwoObjects(Array $arr){
		$res = array();
		$reversed = array_reverse($arr);
		array_push($res, current($reversed), next($reversed));
		return $res; 
	}
	
	/**
	* Function that deletes the middle of an array.
	* @author Carole LE ROUX
	* return an array
	*/
	function deleteCenter(Array $arr){
		$suppr = count($arr) / 2 ;
		unset($arr[$suppr]);
		return $arr;
	}


	/* Function that returns the longest string of an array.
	* @author Alexandre BEAUVERGER
	* return string
	*/
	function getLongestString(Array $arr){
		$result="";
		for($i = 0; $i < count($arr); $i++)
			if(strlen($result) < strlen($arr[$i]))
				$result = $arr[$i];
		return $result;
	}

	/* Function that replaces the first 0 digit of phone numbers by +33.
	* @author : Vassily DUBOIS
	* return an array
	*/
	function replace(Array $tab){
		if ($tab != NULL && !empty($tab)) {
			foreach ($tab as $key => $value) {
				if ($value != "" && $value != NULL) {
					$value = preg_replace('/^0(\d{9})$/', '+33$1', $value);
				}
			}
			return $tab;
		} 
		throw new Exception("Invalid array given. It should be neither null nor empty.");
	}

	/*
	* Function that counts the number of occurences of the needle in the strings present in the array.
	* @author Alexandre DOUARD
	* return a number
	*/ 
	function countCharInArray(Array $array, String $needle = "h"){
		$imploded = implode($array);
		return substr_count($imploded, $needle);
	}

?>
