<?php

function toMoisCA($value, $CA){
   	return round($value / $CA * 12, 1);
}