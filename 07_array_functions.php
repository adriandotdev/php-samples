<?php
$arr = [1, 2, 3, 4];

array_push($arr, 5, 6, 7, 7, 9, 10, 5);
array_pop($arr);
array_unique($arr);
var_dump(array_reverse($arr));
var_dump(array_unique($arr));
