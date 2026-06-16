<!DOCTYPE html>
<html>
<body>

<h1>Switch</h1>

<?php
  $favcolor = "red";

  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
      break;
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }
  echo '<br>';
  $favcolor = "red";

  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";
    case "blue":
      echo "Your favorite color is blue!";
      break;
    case "green":
      echo "Your favorite color is green!";
      break;
    default:
      echo "Your favorite color is neither red, blue, nor green!";
  }
  echo '<br>';
  $d = 4;

  switch ($d) {
    case 6:
      echo "Today is Saturday";
      break;
    case 0:
      echo "Today is Sunday";
      break;
    default:
      echo "Looking forward to the Weekend";
  }
?>

</body>
</html>