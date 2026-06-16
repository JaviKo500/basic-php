<!DOCTYPE html>
<html>
<body>

<h1>Data Types</h1>
<!-- * string (text values)
int (whole numbers)
float (decimal numbers)
bool (true or false)
array (multiple values)
object (stores data as objects)
null (empty variable)
resource (references external resources) -->
<?php
  $a = 5;
  echo "Value of a is $a <br>";
  var_dump($a);
  echo '<br>';
  $a = 'Hello World';
  echo "Value of a is $a <br>";
  var_dump($a);
  echo '<br>';
  $a = 12345;
  echo "Value of a is $a <br>";
  var_dump($a);
  echo '<br>';
  // * float
  $a = 12.345;
  echo "Value of a is $a <br>";
  var_dump($a);
  echo '<br>';
  //* bool
  $b = true;
  echo "Value of b is $b <br>";
  var_dump($b);
  echo $b ? 'true' : 'false';
  echo '<br>';
  $b = false;
  echo '<br>';
  echo "Value of b is $b <br>";
  echo $b ? 'true' : 'false';
  echo '<br>';
  var_dump($b);
  echo '<br>';

  // * array
  $fruits = array("Apple", "Banana", "Cherry");
  echo "Value of fruits is: ";
  var_dump($fruits);

  // * object
  class Car {
    public $color;
    public $model;

    public function __construct($color, $model)
    {
      $this->color = $color;
      $this->model = $model;
    }

    public function message() {
      echo "My car color is $this->color and model is $this->model";
    }
  }

  $myCar = new Car("red", "Toyota");
  echo '<br>';
  echo "Value of myCar is: ";
  var_dump($myCar);
  echo '<br>';
  $myCar->message();

  // * null
  $z = 'Hello';
  $x = null;
  echo '<br>';
  echo 'Value of z is: ' . $z;
  echo '<br>';
  var_dump($x);
  echo '<br>';
  echo '<br>';
  // * change value of x to null

  echo 'Change value';
  $value = 5;
  var_dump($value);
  echo '<br>';
  $value = 'javiko500';
  var_dump($value);
?>

</body>
</html>