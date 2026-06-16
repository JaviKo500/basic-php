<!DOCTYPE html>
<html>
<body>

<h1>If Else</h1>

<?php
  if (5 > 3) {
    echo "Have a good day!";
  }
  echo '<br>';

  $t = 14;
  if ($t < 20) {
    echo "Have a good day!";
  }

  echo '<br>';

  if ($t > 20) {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }

   echo '<br>';
  if ($t == 14) {
    echo "Have a good day!";
  }


  $a = 200;
  $b = 33;
  $c = 500;

   echo '<br>';
  if ($a > $b && $a < $c ) {
    echo "Both conditions are true";
  }

  function test( $a = 0 ) {
    echo '<br>';
    if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
      echo "$a is a number between 2 and 7";
    } else {
      echo "$a is not a number between 2 and 7";
    }
  }

  echo '<br>';
  test(2);
  test(10);

  $t = date("H");

  echo '<br>';
  if ($t < "10") {
    echo "Have a good morning! $t";
  } elseif ($t < "20") {
    echo "Have a good day! $t";
  } else {
    echo "Have a good night! $t";
  }

  echo '<br>';
  $a = 5;

  if ($a < 10) $b = "Hello";

  echo $b;

  echo '<br>';
  $a = 13;

  $b = $a < 10 ? "Hello" : "Good Bye";

  echo $b;
?>

</body>
</html>