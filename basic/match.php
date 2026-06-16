<!DOCTYPE html>
<html>
<body>

<h1>Match</h1>

<?php
  $favcolor = "red";

  $text = match($favcolor) {
    "red" => "Your favorite color is red!",
    "blue" => "Your favorite color is blue!",
    "green" => "Your favorite color is green!",
    default => "Your favorite color is neither red, blue, nor green!",
  };

  echo $text;
  echo '<br>';
  $d = 3;

  $text = match($d) {
    1, 2, 3, 4, 5 => "The week feels so long!",
    6, 0 => "Weekends are best!",
    default => "Invalid day",
  };

  echo $text;
  echo '<br>';
  $favcolor = "pink"; // no conditions will match this

  try {
    $text = match($favcolor) {
      "red" => "Your favorite color is red!",
      "blue" => "Your favorite color is blue!",
      "green" => "Your favorite color is green!",
    };
  } catch (\UnhandledMatchError $e) {
    var_dump($e);
  }

  echo $text;
?>

</body>
</html>