<!DOCTYPE html>
<html>
<body>

<h1>Constants</h1>

<?php
  echo '<br>';
  echo '<h3>define</h3>';
  define('PI', 3.1416);
  echo PI;
  echo '<br>';

  function myTest() {
    define("GREETING", "Welcome to W3Schools.com!");
  }

  myTest();

  echo GREETING;

  echo '<br>';
  echo '<h3>Constants</h3>';
  const PI2 = 3.1416;
  echo PI2;
  
  echo '<br>';
  const GREETING2 = "Welcome to W3Schools.com!";
  echo GREETING2;
  echo '<br>';

  // Using define()
  define("CARS", array("Volvo", "BMW", "Toyota"));
  echo CARS[0];
  echo '<br>';
  // Using const
  const ANIMALS = array("Cat", "Dog", "Horse");
  echo ANIMALS[1];
  echo '<br>';
?>

</body>
</html>