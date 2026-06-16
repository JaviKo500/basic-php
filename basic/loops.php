<!DOCTYPE html>
<html>
<body>

<h1>Loops</h1>

<?php
  // * while
  $counter_while = 0;
  echo "<h3>While</h3>";
  while ( $counter_while < 5 ) {
    echo "Counter is $counter_while <br>";
    $counter_while++;
  }

  echo "<br>";
  $counter_while_break = 0;
  while ( $counter_while_break < 5 ) {
    if ( $counter_while_break === 2 ) break;
    echo "Counter is $counter_while_break <br>";
    $counter_while_break++;
  }

  echo "<br>";
  $counter_while_continue = 0;
  while ( $counter_while_continue < 5 ) {
    $counter_while_continue++;
    if ( $counter_while_continue == 2 ) continue;
    echo "Counter is $counter_while_continue <br>";
  }

  // * do while
  echo "<br>";
  echo "<h3>Do While</h3>";
  $counter_do_while = 0;
  do {
    echo "Counter is $counter_do_while <br>";
    $counter_do_while++;
  } while ( $counter_do_while < 5 );

  $counter_do_while_ = 10;
  echo "<br>";
  do {
    echo "Counter is $counter_do_while_ <br>";
    $counter_do_while_++;
  } while ( $counter_do_while_ < 5 );


  echo "<br>";
  echo "<h3>For</h3>";
  for ($i=0; $i < 10; $i++) { 
    echo "Counter is $i <br>";
  }
  echo "<br>";
  for ($i=10; $i >= 0; $i--) {
    echo "Counter is $i <br>";
  }
  echo "<br>";
  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }

  echo "<br>";
  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    echo "The number is: $x <br>";
  }

  echo '<br>';
  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }

  // * foreach
  echo '<br>';
  echo '<h3>Foreach</h3>';
  $colors = array("red", "green", "blue", "yellow");
  foreach ($colors as $value) {
    echo "The color is: $value <br>";
  }
  echo '<br>';
  foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
  }
  echo '<br>';
  echo '<br>';
  echo "<h3>Foreach not effect array</h3>";
  foreach ($colors as $x) {
    if ($x == "blue") $x = "pink";
  }

  var_dump($colors);
  echo '<br>';
  echo '<br>';
  echo "<h3>Foreach effect array</h3>";
  foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
  }
  var_dump($colors);
  echo '<br>';
  $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

  foreach ($members as $key => $value) {
    echo "$key : $value <br>";
  }
?>

</body>
</html>