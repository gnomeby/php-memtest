php-memtest
===========

Test suite that meters consuming memory by PHP objects and other operators.

#### Requirements:
PHP 5.1

#### Usage
php run.include-test.php - test how includes consume memory
php run.testsuite-without-accelerator.php - a set of tests that measures consuming memory in different situations. PHP Accelerator will be ignored.

http://localhost/run.testsuite-with-accelerator.php - a set of tests that measures consuming memory in different situations. PHP Accelerator will be used.