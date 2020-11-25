<?php 

if (!function_exists('numberInRange')) {
	function numberInRange($val, $min, $max) {
		return ($val >= $min && $val <= $max);
	}
}