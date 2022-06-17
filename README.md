# Requirements

Requirements:
  - PHP 7.4.29
  - Composer 2.2.14
  - phpunit 9.5.x-dev
  - suitable version `git`

# Preparing

Please open your console and follow next simple steps:

- `git clone https://github.com/alari777/ld-tasks-1.git .`
- `composer update`
- `composer dump-autoload`

Well, in that case we can get next structure:
- `html` - this is automatically generated folder with current covering tests (by `phpunit`);
- `src` - this is folder with `classes`: `Anagram.php` and `MaxSubarray.php` are interfaces. `CheckAnagram.php` and `FindMasSubarray.php` are implementations of these interfaces;
- `tests` - this is folder with `tests`;
- `vendor` - installed dependencies via composer;
- `indexA.php` - this is script for `anagram problem`;
- `indexS.php` - this is script for `maximum subarray`;
- `phpunit.xml` - this is short XML config for `phpunit`. 

# First task: Maximum subarray

## Short description

> This application works at `Kadane’s Algorithm`.

This algorithm has complexity: O(n)

We need to go through the array and accumulate the current partial sum in some variable e.g. named `sum`. If at some point `sum` turns out to be negative, then we set value of `sum`  as `0`. It is claimed that the maximum of all values of the variable `sum` that occurred during the work will be the resolve to the problem.

> In short about `sum`: we need to keep all these values e.g. in some array OR to make the comparing current and previous value of `sum`. Actually I think both ways are good and it depends on what you prefer.

> I think a work array has to have at least one negative element because in that case (if all elements are positive) we just need to calculate total sum of all values of current array and the task becomes irrelevant.

To start open your console and enter next instruction:
`php indexS.php N_1 N_2 N_3 N_4`

N_1 - first number

N_2 - second number

N_3 - one more number

N_4 - one more number

...

N_m - one more number

![formula](./imgs/indexS.PNG)

# Second task: Anagram problem

Complexity is: O(n)

For both words: is filling an array for first/second word where key of each element is a letter. The value of this element is amount of this letter. Also this array will be sorted by a key from A to Z. Then it is necessary to compare these arrays and if they are equal then in that case these words are anagrams.

To start open your console and enter next instruction:
`php indexA.php ANY_WORD_1 ANY_WORD_2`

ANY_WORD_1 - any word

ANY_WORD_2 - any word

![formula](./imgs/indexA.PNG)

# Tests

To start common tests: `vendor/bin/phpunit tests`

> Folder `html` - it is automatically generated folder where you can see the covering of tests via browser. In that case you should have suitable version of extension named `php_xdebug.dll` and you should add next lines in `php.ini`:
> - `zend_extension=xdebug`
> - `xdebug.mode=coverage`
>
> To start tests with covering in html: `vendor/bin/phpunit tests --coverage-html html`
>
> To see results you should open `html/index.html` in your browser.
>
> That is really clear and simple instruction how to check is this extension active and what need to do to add this extension:
>
> `https://xdebug.org/wizard`

# Docker

You can start this task via Docker.

Please go to empty folder and:

- Or create `Dockerfile` and insert there this pixel of code:

```
FROM php:7.4.29-cli
  
# Install software
RUN apt-get update && apt-get upgrade -y && \
      apt-get install -y nodejs \
      unzip \
      curl \
      zip \
      git \
      npm

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html/ld

# Clone git project
RUN git clone https://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@github.com/alari777/ld-tasks-1.git .

# Install dependencies and update autoload routes
RUN composer update && \
      composer dump-autoload --optimize

# Print php and composer versions
CMD php --version && \
      composer --version
```

- Or copy current `Dockerfile` into this empty folder.

Please open your terminal and type next commands: 
- `sudo docker build -t ld-image .` 

Result is:

![formula](./imgs/docker-build.PNG)

- `sudo docker run -it --name ld-container-1 ld-image:latest /bin/bash`

In that case you will be inside of new created container. 
Well e.g. you are able execute with next
- `php indexS.php -1 4 5 6 -3 60`
- `php indexA.php CAR RAT`
- `vendor/bin/phpunit tests`

![formula](./imgs/docker-run-container.PNG)

# Personal access tokens at github

Please remember that you need to have personal token at github.

Problem: the `oauthtoken` is needed to access private github repositories and bypass their IP-based slow speed API limitation. Composer may prompt you for credentials if necessary.

You can use this link:
https://github.com/settings/tokens