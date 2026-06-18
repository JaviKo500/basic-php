<!DOCTYPE html>
<html>
<body>

<h1>Superglobals</h1>

<?php
  echo '<h3> GLOBALS </h3>';
  print_r($GLOBALS);
  $x = 1;
  $y = 2;
  function sum(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  sum();
  echo '<br>';
  echo 'z = '.$z;
  echo '<br>';
  echo '<h3> SERVER </h3>';
  print_r($_SERVER);
  echo '<br>';
  echo "PHP_SELF = ".$_SERVER['PHP_SELF']." <br>";
  echo "GATEWAY_INTERFACE = ".$_SERVER['GATEWAY_INTERFACE']." <br>";
  echo "SERVER_ADDR = ".$_SERVER['SERVER_ADDR']." <br>";
  echo "SERVER_NAME = ".$_SERVER['SERVER_NAME']." <br>";
  echo "SERVER_SOFTWARE = ".$_SERVER['SERVER_SOFTWARE']." <br>";
  echo "QUERY_STRING = ".$_SERVER['QUERY_STRING']." <br>";
  echo "REQUEST_METHOD = ".$_SERVER['REQUEST_METHOD']." <br>";
  echo "HTTP_HOST = ".$_SERVER['HTTP_HOST']." <br>";
  echo "SCRIPT_NAME = ".$_SERVER['SCRIPT_NAME']." <br>";
  echo "SCRIPT_URI = ".$_SERVER['SCRIPT_URI']." <br>";
  echo '<h3> $_REQUEST  </h3>';
  print_r($_REQUEST);
  echo "<br>";

  echo '<h3> $_POST  </h3>';
  print_r($_POST);
  echo '<h3> $_GET  </h3>';
  print_r($_GET);
  echo '<h3> $_FILES  </h3>';
  print_r($_FILES);
  echo '<h3> $_ENV  </h3>';
  print_r($_ENV);
  echo '<h3> $_COOKIE  </h3>';
  print_r($_COOKIE);
  echo '<h3> $_SESSION  </h3>';
  print_r($_SESSION);
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  Name: <input type="text" name="name"><br>
  <input type="submit" value="Submit">
</form>

<?php 
  if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = htmlspecialchars($_REQUEST['name']);
    if ( empty($name) ) {
      echo "Please enter your name. <br>";
    } else {
      echo "Hello $name. <br>";
    }
  }
?>

</body>
</html>