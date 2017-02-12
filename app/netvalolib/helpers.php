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