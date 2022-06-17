<?php


namespace App\LeadDeskTasks;

require 'vendor/autoload.php';

class CheckAnagram implements Anagram
{
    public function isAnagram(string $word1, string $word2): bool
    {
        // TODO: Implement isAnagram() method.

        // Complexity is: O(n)

        // Is filling an array for FIRST word where `key` of each element is `a letter`.
        // The value of this element is amount of this letter.
        // Also this array will be sort from `A` to `Z` by a key.
        $arr1 = [];
        foreach (count_chars($word1, 1) as $key => $value) {
            $arr1[chr($key)] = $value;
        }

        // Is filling an array for SECOND word where `key` of each element is `a letter`.
        // The value of this element is amount of this letter.
        // Also this array will be sort from `A` to `Z` by a key.
        $arr2 = [];
        foreach (count_chars($word2, 1) as $key => $value) {
            $arr2[chr($key)] = $value;
        }

        return ($arr1 === $arr2);
    }
}