<?php


namespace App\LeadDeskTasks;

require 'vendor/autoload.php';

class FindMaxSubarray implements MaxSubarray
{
    public function contiguous(array $array): int
    {
        // TODO: Implement contiguous() method.

        $sum = 0;
        $subtotals = [];
        // Complexity is: O(n)
        foreach ($array as $value) {
            // Is getting current summa
            $sum += $value;
            if ($sum < 0) {
                $sum = 0;
            } else {
                // Are keeping subtotals
                $subtotals[] = $sum;
            }
        }

        // Return max value of subtotals array
        return max($subtotals);
    }
}