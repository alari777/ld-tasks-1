<?php

namespace App\LeadDeskTasks;

require 'vendor/autoload.php';

// Start anagram task.
// Necessary to pass 2 words to compare these ones and to find out are they anagrams.
if (isset($argv[1]) && isset($argv[2])) {
    $word1 = $argv[1];
    $word2 = $argv[2];
    $outAnagram = new CheckAnagram();
    $outAnagram->isAnagram($word1, $word2);
    echo ($outAnagram->isAnagram($word1, $word2) === true)
        ? "Anagram: These words: `$word1` and `$word2` are anagrams."
        : "Anagram: These words: `$word1` and `$word2` are not anagrams.";
} else {
    echo "Please enter 2 (two) words ... ";
}