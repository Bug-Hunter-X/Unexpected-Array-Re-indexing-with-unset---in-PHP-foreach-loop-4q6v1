function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]); // This will re-index the array
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'a', 'c'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [3] => c )

//Expected Output: Array ( [0] => b [1] => c )