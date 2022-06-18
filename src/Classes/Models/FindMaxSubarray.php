<?php


namespace App\LeadDeskTasks;

require 'vendor/autoload.php';

class FindMaxSubarray implements MaxSubarray
{
    public function contiguous(array $array): int
    {
        // TODO: Implement contiguous() method.

        $sum = 0;
        // If all elements are negative so in that case there are no any exist intermediate values.
        // Also in that case max subtotal is `0` and it is only one.
        // Also if this array consist at least one value then we don't get any error using `max` function. It is good.
        $subtotals = [0];
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