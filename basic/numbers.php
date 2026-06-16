<!DOCTYPE html>
<html>
<body>

<h1>Numbers</h1>

<?php
  $a = 5;
  $b = 5.34;
  $c = "25";

  var_dump($a);
  echo '<br>';
  var_dump($b);
  echo '<br>';
  var_dump($c);
  echo '<br>';

  // * is_int
  $x = 5985;
  var_dump(is_int($x));
  echo '<br>';

  $y = 59.85;
  var_dump(is_int($y));
  echo '<br>';
  echo '<br>';

  //* constant
  echo '<br>';
  echo PHP_INT_MAX;
  echo '<br>';
  echo PHP_INT_MIN;
  echo '<br>';
  echo PHP_INT_SIZE;
  echo '<br>';
  echo '<br>';
  echo '<br>';

  // float
  $x = 5.34;
  var_dump($x);
  echo '<br>';

  // * is_float
  var_dump(is_float($x));
  echo '<br>';

  echo PHP_FLOAT_MAX;
  echo '<br>';
  echo PHP_FLOAT_MIN;
  echo '<br>';
  echo PHP_FLOAT_DIG;
  echo '<br>';
  echo PHP_FLOAT_EPSILON;

  // * is_infinite
  echo '<br>';
  echo '<br>';
  echo '<br>';
  $x = 1.9e411;
  var_dump(is_infinite($x));
  
  // * is_nan
  echo '<br>';
  $x = 1.9e411;
  var_dump(is_nan($x));
  $x = acos(8);
  var_dump($x);
  echo '<br>';
  // Check if value is not a number (NaN)
  var_dump(is_nan($x));
  echo '<br>';
  $y = 5.5;
  var_dump(is_nan($y));


  echo '<br>';
  echo '<br>';
  $x = 5985;
  var_dump(is_numeric($x));

  $x = "5985";
  var_dump(is_numeric($x));
  $x = "59.85" + 100;
  echo '<br>';
  echo $x;
  var_dump(is_numeric($x));

  $x = "Hello";
  var_dump(is_numeric($x));

  echo '<br>';
  echo '<br>';
  $x = 23465.768;
  echo intval($x);

  echo "<br>";

  $x = "23465.768";
  echo intval($x);
?>

</body>
</html>