<?php
// For the given array of integers, count even and odd elements.
function findEvenOdd($array)
{
    $count_even = 0;
    $count_odd = 0;

    for($i = 0; $i < count($array); $i++){
        if($array[$i] & 1 == 1){
            $count_odd++;
        }else{
            $count_even++;
        }
    }
    echo "Count of even number: " . $count_even . "\n";
    echo "Count of odd number: " . $count_odd;
}

findEvenOdd([1, 2, 3, 10, 15]);