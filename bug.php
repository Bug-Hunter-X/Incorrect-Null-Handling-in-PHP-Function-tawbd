function foo(a, b) {
  if (a === null || b === null) {
    return 0; // Handle null values
  }
  return a + b;
}

// Incorrect usage of the function
$result = foo(null, 5);  // result will be 0
$result2 = foo(10, null); // result2 will be 0
$result3 = foo(null,null); // result3 will be 0

// The problem is that the if condition doesn't check if a and b are both null, it only checks each one individually.