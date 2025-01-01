function foo(a, b) {
  if (a === 0 || b === 0) {
    return 0; // This line might cause unexpected behavior
  }
  return a / b; 
}