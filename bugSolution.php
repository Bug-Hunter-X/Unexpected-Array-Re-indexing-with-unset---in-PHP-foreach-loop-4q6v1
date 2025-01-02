function foo(array $arr) {
  // Solution 1: using a for loop in reverse to avoid re-indexing issues
  for ($i = count($arr) - 1; $i >= 0; $i--) {
    if ($arr[$i] === 'a') {
      unset($arr[$i]);
    }
  }
  return $arr;
}

function foo2(array $arr) {
  // Solution 2: Using array_filter to create a new array without 'a'
  return array_filter($arr, fn($val) => $val !== 'a');
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => b [1] => c )

$result2 = foo2($arr);
print_r($result2); // Output: Array ( [1] => b [3] => c )