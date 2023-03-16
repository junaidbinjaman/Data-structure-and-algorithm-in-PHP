<?php
/**
 * 
 * @package DSA @ PHP
 * @file array
 * 
 */

$array = [1, -3, 2, 1, 4, -1, 55];

function maximumSubArray($array)
{
  $n   = count($array);
  $max = 0;
  for ($i = 0; $i < $n; $i++) {
    $sum = 0;


    for ($j = $i; $j < $n; $j++) {
      $sum += $array[$j];

      if ($sum > $max) {
        $max = $sum;
      }
    }
  }

  return $max;
}

var_dump(maximumSubArray($array));



?>