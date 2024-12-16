function foo(a, b) {
  if (a === null && b === null) {
    return 0; // Handle only when both are null
  }
  return a + b;
}

// Correct usage of the function
$result = foo(null, 5);  // result will not be 0
$result2 = foo(10, null); // result2 will not be 0
$result3 = foo(null,null); // result3 will be 0