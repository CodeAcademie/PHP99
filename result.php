<?php
	function mergeArrays(Array $a1, Array $a2){
		$res=[];
		foreach ($a1 as $key => $value) {
			foreach ($a2 as $key2 => $value2) {
				if(is_string($value) && is_string($value2))
					$res[]=$value2." ".$value;
			}
		}
		return $res;
	}

	function stringToArray(String $str){
		return explode(" ", $str);
	}
	function lastTwoObjects(Array $arr){
		return array_slice ($arr, count($arr)-2,2);
	}
	function deleteCenter(Array $arr){
		return array_merge(array_slice($arr, 0,ceil(count($arr)/2)-1), array_slice ($arr, ceil(count($arr)/2))) ;

	}
	function getLongestString(Array $arr){
		$longest=null;
		foreach ($arr as $key => $value) {
			if( is_string($value) && strlen($value)>strlen($longest)) $longest=$value;
		}
		return $longest;
	}

	function replace(Array $arr){
		$res=[];
		foreach ($arr as $key => $value) {
			$res[]=preg_replace ('/^0(\d{9})/','+33$1',$value);
		}
		return $res;
	}

	function countCharInArray(Array $array, String $char = "h"){
		$array = array_filter($array);
		sort($array);
		$str = join("", $array);
		return substr_count($str, $char);
	}

?>
