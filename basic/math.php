<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
  echo '<br>';
  echo '<h3>Pi</h3>';
  echo pi();

  echo '<br>';
  echo '<h3>min</h3>';
  echo min(0, 150, -8, -200);

  echo '<br>';
  echo '<h3>max</h3>';
  echo max(0, 150, -8, -200);
  
  echo '<br>';
  echo '<h3>abs</h3>';
  echo abs(-5.5);
  
  echo '<br>';
  echo '<h3>sqrt</h3>';
  echo sqrt(64);

  echo '<br>';
  echo '<h3>round</h3>';
  echo round(3.60);
  echo '<br>';
  echo round(0.49);
  
  echo '<br>';
  echo '<h3>rand</h3>';
  echo rand();
  echo '<br>';
  echo rand(0, 10);
  echo '<br>';
  echo(rand(10, 100));
?>

</body>
</html>