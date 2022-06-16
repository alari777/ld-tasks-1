# Requirements

Requirements:
  - PHP 7.4.29
  - Composer 2.2.14
  - phpunit 9.5.x-dev
  - suitable version `git`

# Preparing

Open your console and follow next steps:

> `git clone https://github.com/alari777/ld-tasks-1.git .`
>
>`composer update`

Structure:
- `html` - it is automatically generated folder with current covering tests (by `phpunit`)
- `src` - this is folder with `classes`
- `tests` - this is folder with `tests`
- `vendor` - installed dependencies via composer
- `indexA.php` - this is script for `anagram problem`
- `indexS.php` - this is script for `maximum subarray`
- `phpunit.xml` - this is short XML config for `phpunit` 

# First task: Maximum subarray

## Short description

> This application works at `Kadane’s Algorithm`.

This algorithm has complexity: O(n)

We need to go through the array and accumulate the current partial sum in some variable e.g. named `sum`. If at some point 'sum' turns out to be negative, then we set value of `sum`  as `0`. It is claimed that the maximum of all values of the variable `sum` that occurred during the work will be the resolve to the problem.

> The point about `sum`:
We need to keep all these values e.g. in some array OR to make the comparing current and previous value of `sum`. Actually I think both ways are good and it depends on what you prefer.

> I think that working array has to have at least one negative element because in that case (if all elements are positive) we just need to calculate summa of all values of current array and the task becomes irrelevant.

To start open your console and enter next instruction:
`php indexS.php N_1 N_2 N_3 N_4`

N_1 - first number

N_2 - second number

N_3 - one more number

N_4 - one more number

...

N_m - one more number

# Second task: Anagram problem

Complexity is: O(n)

For both words: is filling an array for first/second word where `key` of each element is `a letter`. The value of this element is amount of this letter. Also this array will be sort from `A` to `Z` by a key. Then I need to compare these arrays and if they are equal then in that case these words are anagrams.

To start open your console and enter next instruction:
`php indexA.php $word1 $word2`

$word1 - first word

$word2 - second word


# Tests

To start common tests: `vendor/bin/phpunit tests`

> Folder `html` - it is automatically generated folder where you can see the covering of tests via browser. In that case you need to have suitable version of extension named `php_xdebug.dll` and you need to add next lines in `php.ini`:
> - zend_extension=xdebug
> - xdebug.mode=coverage
>
> To start tests with covering in html: `vendor/bin/phpunit tests --coverage-html html`
>
> To see results you should to open `html/index.html` in your browser