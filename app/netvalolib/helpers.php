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