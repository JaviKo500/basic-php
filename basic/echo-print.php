<!DOCTYPE html>
<html>
<body>

<h1>Echo and Print</h1>

<?php
  echo 'Hello World!';
  echo '<br>';
  echo ("Hello World!");

  echo "<h2>PHP is a great language</h2>";
  echo '<br>';
  echo "This ","String ","is ","Concatenated ","with ","Spaces";
  echo '<br>';

  $text1 = "Learning PHP";
  $text2 = "is fun";

  echo '<br>';
  echo "<h3>$text1</h3>";
  echo "<p>$text1 $text2</p>";
  echo '<br>';
  
  echo "<h2>Print</h2>";
  print 'hello world';
  print '<br>';
  print ("hello world");
  print "<h2>PHP is Fun!</h2>";
  print "Hello world!<br>";
  print "I'm about to learn PHP!";

  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";

  print "<h2>$txt1</h2>";
  print "<p>Study PHP at $txt2</p>";

  $txt1 = "Learn PHP";
  $txt2 = "W3Schools.com";

  print '<h2>' . $txt1 . '</h2>';
  print '<p>Study PHP at ' . $txt2 . '</p>';

  $name = 'Linus';
print '<h1>Hello $name</h1>';
print "<h1>Hello " . $name . "</h1>";
?>

</body>
</html>