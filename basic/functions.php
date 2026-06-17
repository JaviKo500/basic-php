<!DOCTYPE html>
<html>
<body>

<h1>Functions</h1>

<?php
  function firstFunction() {
    echo "Hello World!";
    echo '<br>';
  }
  firstFunction();

  function familyName ( string $name ) {
    var_dump($name);
    echo "$name Refsnes.<br>";
  }

  familyName("Javiko");
  familyName("Pablo");
  familyName("Nube");
  familyName(5);
  familyName(true);
  // familyName(null);

  function familyNameYear ( string $name, int $year ) {
    var_dump($name);
    var_dump($year);
    echo "$name Refsnes. Born in $year.<br>";
  }

  familyNameYear('Javiko', 27);
  familyNameYear('Nube', 20);
  familyNameYear('Pablo', 23);
  familyNameYear(5, "23");
  // familyNameYear("Isa", null);

  function defaultValue( int $height = 50 ) {
    echo "Height is $height <br>";
  }
  defaultValue();
  defaultValue(100);

  function sum( int $a, int $b ) {
    return $a + $b;
  }
  $result = sum(5, 10);
  echo "Result is $result <br>";

  // *  pass-by-reference
  function addFive( &$value) {
    $value += 5;
  }
  $number = 10;
  addFive($number);
  echo "Value is $number <br>";
  addFive($number);
  echo "Value is $number <br>";

  function sumMyNumbers( int ...$numbers ): int{
    $n = 0;
    var_dump($numbers);
    $length = count($numbers);
    for ($i=0; $i < $length; $i++) { 
      $n += $numbers[$i];
    }
    return $n;
  }

  $a = sumMyNumbers(1, 2, 3, 4, 5);
  echo "Sum is $a <br>";

  function myFamily( string $lastName, string ...$firstName ): string {
    $txt = '';
    $length = count($firstName);
    var_dump($firstName);
    echo '<br>';
    for ($i=0; $i < $length; $i++) { 
      $txt = $txt."Hi, $firstName[$i] $lastName.<br>";
    }
    return $txt;
  }

  echo myFamily("Gutierrez", "Javiko", "Pablo", "Nube");
?>

</body>
</html>