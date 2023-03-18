<?php

$arr1 = [1, 2, 3];
$arr2 = [10, 40, 90];
$arr3 = [2.1, 44.5, 43.3];
$arr4 = ["asd", "as", "a"];

$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [1, 2]);

print_r($arrMerge);
