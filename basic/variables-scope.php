<!DOCTYPE html>
<html>
<body>

<h1>Variables Scope</h1>

<?php
  $x = 5;
  function test() {
    // * using x inside function will not work
    echo "Variable x is $x";
  }
  test();
  echo "<br>";

  echo "Variable x outside function is $x";
  echo "<br>";  
  echo "<br>";  
  echo "<br>";  
  function testLocalScope() {
    $y = 10;
    echo "Variable x inside function is $y";
  }
  testLocalScope();
  echo "Variable x outside function is: $y";

  echo "<br>";echo "<br>";

  function testStaticVariable() {
    static $count = 0;
    $a = 0;
    echo "Count is $count - $a <br>";
    $count++;
    $a++;
  }
  testStaticVariable();
  echo "<br>";
  testStaticVariable();
  echo "<br>";
  testStaticVariable();

  $a = 5;
  $b = 10;

  function testAddGlobalVariable() {
    global $a, $b;
    $b = $a + $b;
  }
  testAddGlobalVariable();
  echo "<br>";
  echo "Value of b is $b";
  testAddGlobalVariable();
  echo "<br>";
  echo "Value of b is $b";
  echo "<br>";


  // * global variable
  echo "<br> Global variable <br>";
  $i = 5;
  $j = 10;

  function testGlobalVariable() {
    $GLOBALS['j'] = $GLOBALS['i'] + $GLOBALS['j']; 
  }

  testGlobalVariable();
  echo "Value of j is $j";
  testGlobalVariable();
  echo "<br>";
  echo "Value of j is $j";

?>

</body>
</html>