<!DOCTYPE html>
<html>
<body>

<h1>Variables</h1>

<?php
  $x = 5;
  $y = 10;
  $name = 'Javiko';
  echo $x;
  echo '<br>';
  echo $name;
  
  echo "<br>My name is $name";
  echo '<br>My name is '. $name .'!';
  
  echo '<br>';
  echo $x + $y;
  echo '<br>';
 
  //* only debug vale an type of variable
  var_dump($x);
  var_dump($y);
  var_dump($name);

  $x = 'Hello';
  echo '<br>';
  echo $x;
?>

</body>
</html>