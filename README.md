# PHP Unset() Re-indexing Bug

This repository demonstrates an uncommon bug in PHP related to the `unset()` function within a `foreach` loop. When removing elements from an array using `unset()` inside a `foreach` loop, the array's internal indexing changes, causing potential issues.

The `bug.php` file contains a function that demonstrates this issue. The function removes elements with the value 'a' but the array indices are changed unexpectedly.

The `bugSolution.php` file shows the corrected code using a `for` loop or array filter to avoid this behavior.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output.
4. Run `bugSolution.php` to see the correct output.

## Solution

The solution avoids using `unset()` in the `foreach` loop. It uses either a `for` loop for iterating in reverse or `array_filter` which creates a new array. These approaches prevent the re-indexing issue and maintain the expected array indices.