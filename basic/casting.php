<!DOCTYPE html>
<html>
<body>

<h1>Casting</h1>

<?php
  // * string
  echo "<h3>String</h3>";
  $a = 5;       // Integer
  $b = 5.34;    // Float
  $c = "hello"; // String
  $d = true;    // Boolean
  $e = NULL;    // NULL

  $a = (string) $a;
  $b = (string) $b;
  $c = (string) $c;
  $d = (string) $d;
  $e = (string) $e;

  // Use var_dump() to verify the data type
  echo "<p>a</p>";
  var_dump($a);
  echo '<p>b</p>';
  var_dump($b);
  echo '<p>c</p>';
  var_dump($c);
  echo '<p>d</p>';
  var_dump($d);
  echo '<p>e</p>';
  var_dump($e);

  echo '<br>';
  echo '<br>';
  echo '<br>';

  $a = 5;       // Integer
  $b = 5.34;    // Float
  $c = "25 km"; // String
  $d = "km 25"; // String
  $e = "hello"; // String
  $f = true;    // Boolean
  $g = NULL;    // NULL

  $a = (int) $a;
  $b = (int) $b;
  $c = (int) $c;
  $d = (int) $d;
  $e = (int) $e;
  $f = (int) $f;
  $g = (int) $g;

  echo "<h3>Int</h3>";
  echo "<p>a</p>";
  var_dump($a);
  echo '<p>b</p>';
  var_dump($b);
  echo '<p>c</p>';
  var_dump($c);
  echo '<p>d</p>';
  var_dump($d);
  echo '<p>e</p>';
  var_dump($e);
  echo '<p>f</p>';
  var_dump($f);
  echo '<p>g</p>';
  var_dump($g);

  echo '<br>';
  echo '<br>';
  echo '<br>';

  $a = 5;       // Integer
  $b = 5.34;    // Float
  $c = "25 km"; // String
  $d = "km 25"; // String
  $e = "hello"; // String
  $f = true;    // Boolean
  $g = NULL;    // NULL

  $a = (float) $a;
  $b = (float) $b;
  $c = (float) $c;
  $d = (float) $d;
  $e = (float) $e;
  $f = (float) $f;
  $g = (float) $g;

  echo "<h3>Float</h3>";
  echo "<p>a</p>";
  var_dump($a);
  echo '<p>b</p>';
  var_dump($b);
  echo '<p>c</p>';
  var_dump($c);
  echo '<p>d</p>';
  var_dump($d);
  echo '<p>e</p>';
  var_dump($e);
  echo '<p>f</p>';
  var_dump($f);
  echo '<p>g</p>';
  var_dump($g);

  echo '<br>';
  echo '<br>';
  echo '<br>';

  $a = 5;       // Integer
  $b = 5.34;    // Float
  $c = 0;       // Integer
  $d = -1;      // Integer
  $e = 0.1;     // Float
  $f = "hello"; // String
  $g = "";      // String
  $h = true;    // Boolean
  $i = NULL;    // NULL

  $a = (bool) $a;
  $b = (bool) $b;
  $c = (bool) $c;
  $d = (bool) $d;
  $e = (bool) $e;
  $f = (bool) $f;
  $g = (bool) $g;
  $h = (bool) $h;
  $i = (bool) $i;

  echo "<h3>Bool</h3>";
  echo "<p>a</p>";
  var_dump($a);
  echo '<p>b</p>';
  var_dump($b);
  echo '<p>c</p>';
  var_dump($c);
  echo '<p>d</p>';
  var_dump($d);
  echo '<p>e</p>';
  var_dump($e);
  echo '<p>f</p>';
  var_dump($f);
  echo '<p>g</p>';
  var_dump($g);
  echo '<p>h</p>';
  var_dump($h);
  echo '<p>i</p>';
  var_dump($i);

  echo '<br>';
  echo '<br>';
  echo '<br>';


  $a = 5;       // Integer
  $b = 5.34;    // Float
  $c = "hello"; // String
  $d = true;    // Boolean
  $e = NULL;    // NULL

  $a = (array) $a;
  $b = (array) $b;
  $c = (array) $c;
  $d = (array) $d;
  $e = (array) $e;

  echo "<h3>Array</h3>";
  echo "<p>a</p>";
  var_dump($a);
  echo '<p>b</p>';
  var_dump($b);
  echo '<p>c</p>';
  var_dump($c);
  echo '<p>d</p>';
  var_dump($d);
  echo '<p>e</p>';
  var_dump($e);

  echo '<br>';
  echo '<br>';
  echo '<br>';


  class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  echo '<br>';
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  echo '<br>';
  $myCar = (array) $myCar;
  var_dump($myCar);
?>

</body>
</html>