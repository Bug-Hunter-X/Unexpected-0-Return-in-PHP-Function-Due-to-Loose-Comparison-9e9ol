function foo(a, b) {
  if (a === 0 || b === 0) {
    return 0; // Handle zero inputs explicitly.
  }
  //Explicit type check to avoid type juggling
  if (!is_numeric($a) || !is_numeric($b)){
    return "Invalid Input";
  }
  return a / b; 
}