<?php

namespace App\LeadDeskTasks;

require 'vendor/autoload.php';

// Start finding max value of subarrays task.
// Necessary to pass numbers.
if (count($argv) > 1) {
    $outMaxSubarray = new FindMaxSubarray();
    $input = array_slice($argv, 1); // [-1, 4, 5, 6, -3, 60];
    echo "Summa of Max subarray: " . $outMaxSubarray->contiguous($input) . ".\r\n";
} else {
    echo "Please enter data ...";
}