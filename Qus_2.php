<?php
// Given an array, the task is to find average of that array. Average is the sum 
// of array elements divided by the number of elements.

function findAverage($array)
{
    $arraySum = 0;

    for($i = 0; $i < count($array); $i++){
        $arraySum = $arraySum + $array[$i];
    }
    echo $arraySum / count($array);
}

findAverage([15, 25, 15]);