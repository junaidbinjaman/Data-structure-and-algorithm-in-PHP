<?php
/**
 * 
 * 
 * @package DSA
 * @file I am learning two pinter by solving "Remove duplicates elements from an array" problem
 * 
 */

function twoSum($arr, $target)
{
  $n     = count($arr);
  $left  = 0;
  $right = $n - 1;
  while ($left < $right) {
    $sum = $arr[$left] + $arr[$right];
    if ($sum == $target) {
      return array($left, $right);
    } elseif ($sum < $target) {
      $left++;
    } else {
      $right--;
    }
  }
}

// [1, 2, 3, 4, 1, 5, 6, 1]

print_r(twoSum([1, 3, 45, 10], 2));

?>