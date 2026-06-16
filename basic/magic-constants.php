<?php
  namespace Javiko;
  function nameGreeting() {
    echo "Hello World!";
    echo '<br>';
    echo __NAMESPACE__;
  }
?>
<!DOCTYPE html>
<html>
<body>

<h1>Magic Constants</h1>

<?php

  trait message {
    public function message() {
      echo __TRAIT__;
    }
  }

  class CarModel {
    use message;
    public function testMethod() {
      echo __METHOD__;
    }
    public function testClass() {
      echo __CLASS__;
    }

    public function myValue(){
      echo CarModel::class;
    }
  }
  echo '<br>';
  echo '<h3>__LINE__</h3>';
  echo __LINE__;

  echo '<br>';
  echo '<h3>__FILE__</h3>';
  echo __FILE__;

  echo '<br>';
  echo '<h3>__DIR__</h3>';  
  echo __DIR__;

  echo '<br>';
  echo '<h3>__FUNCTION__</h3>';
  echo __FUNCTION__;
  function test() {
    echo __FUNCTION__;
  }
  test();
  
  echo '<br>';
  echo '<h3>__CLASS__</h3>';
  echo __CLASS__;
  $myCar = new CarModel();
  $myCar->testClass();

  
  echo '<br>';
  echo '<h3>__TRAIT__</h3>';
  echo __TRAIT__;
  $myCar->message();

  echo '<br>';
  echo '<h3>__METHOD__</h3>';
  echo __METHOD__;
  $myCar->testMethod();

  echo '<br>';
  echo '<h3>__NAMESPACE__</h3>';
  echo __NAMESPACE__;
  nameGreeting();

  echo '<br>';
  echo '<h3>ClassName::class</h3>';
  $myCar->myValue();
?>

</body>
</html>