<?php

function toMoisCA($value, $CA){
   	return round($value / $CA * 12, 1);
}

function pourcEvo($new, $old){
	$result = ($new / $old - 1);
	$sign = '';
	if($result > 0) $sign = '+';
	return $sign.round($result * 100).'%';
}

// Function to calculate square of value - mean
function sd_square($x, $mean) { return pow($x - $mean,2); }

// Function to calculate standard deviation (uses sd_square)    
function stddev($array) {
    // square root of sum of squares devided by N-1
    return sqrt(array_sum(array_map("sd_square", $array, array_fill(0,count($array), (array_sum($array) / count($array)) ) ) ) / (count($array)-1) );
}

function mille($number) {
	return number_format($number,0, ',', ' ');
}

function million($number){
	return number_format($number/1000000,1,',',' ');
}

function datejour($datestr){
	return date("d-m-Y", strtotime($datestr));
}

function nvReqTypes(){
	$nvrequests = config('nvrequests');
	$a = array();

	foreach ($nvrequests as $req_cat_key => $req_cat_data){
    	foreach ($req_cat_data as $req_type => $req_type_data){
    		if($req_type != 'icon'){
    			$a[$req_type] = [
    				'title' => $req_type_data['service'],
    				'message' => $req_type_data['desc'],
    			];
    		}
    	}
	}

	return $a;
}