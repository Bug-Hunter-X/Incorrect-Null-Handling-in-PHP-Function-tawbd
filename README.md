# Incorrect Null Handling in PHP Function

This repository demonstrates a common error in PHP function parameter handling. The `foo` function aims to add two numbers, but its null handling is flawed. It returns 0 if either `a` or `b` is null, rather than only when both are null.  The solution demonstrates the correct approach.

## Bug

The `bug.php` file contains the buggy function.  The incorrect usage shows how it prematurely returns 0 if only one parameter is null.

## Solution

The `bugSolution.php` file shows the corrected function. The `if` condition accurately checks if *both* parameters are null before returning 0, addressing the logical error.