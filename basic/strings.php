<!DOCTYPE html>
<html>
<body>

<h1>Strings</h1>

<?php
  // Using double quotes
  $x = "John";
  echo "<pre>";
  echo "Hello $x\n";
  echo "\tHow are you?\n";
  echo "</pre>";

  echo '<br>';
  // Using single quotes
  $x = 'John';
  echo 'Hello $x\n';
  echo '\tHow are you?\n';

  // * strlen
  echo '<br>';
  $name = 'Javiko';
  echo "Length of name is " . strlen($name);
  echo '<br>';

  // * str_word_count
  $text = "This is a sample text";
  echo '<br>';
  echo "Number of de words in text is ". str_word_count($text);
  echo '<br>';

  // * str_contains
  echo '<br>';
  $txt = "I really love PHP!";
  var_dump(str_contains($txt, "love"));
  var_dump(str_contains($txt, "Love"));
  var_dump(str_contains($txt, "javiko"));
  echo '<br>';
  
  // * strpos
  $txt = "I really love PHP!";
  echo '<br>';
  echo "Index of love is ". strpos($txt, "love");
  echo '<br>';

  // * strtoupper
  echo '<br>';
  $txt = "I really love PHP!";
  echo strtoupper($txt);
  echo '<br>';

  // * strtolower
  echo '<br>';
  $x = "Hello World!";
  echo strtolower($x);
  echo '<br>';

  // * str_replace
  echo '<br>';
  $x = "Hello World!";
  echo str_replace("World", "JaViKo", $x);
  echo str_replace("world", "JaViKo", $x);
  echo '<br>';

  // * strrev
  $x = "Hello World!";
  echo '<br>';
  echo strrev($x);
  echo '<br>';

  // * explode
  echo '<br>';
  $x = "Hello World from PHP!";
  $words = explode(" ", $x);
  print_r($words);
  echo '<br>';

  // * implode
  echo '<br>';
  print_r(implode(" ", $words));
  echo '<br>';

  // * substr
  $x = "Hello World from PHP!";
  echo '<br>';
  print_r(substr($x, 0, 5));
  echo '<br>';
  print_r(substr($x, 5, 5));
  echo '<br>';
  print_r(substr($x, 10, 5));
  echo '<br>';
?>

</body>
</html>