<!DOCTYPE html>
<html>
<body>

<h1>Arrays</h1>

<?php
  echo '<h2> Indexed Arrays </h2>';
  $carsModels = array('Toyota', 'Ford', 'Nissan', 'Honda', 'BMW');
  $carsModelsList = ['Toyota', 'Ford', 'Nissan', 'Honda', 'BMW'];
  echo "count of carsModels is ".count($carsModels)."<br>";
  echo "Value of carsModels[0] is ".$carsModels[0]."<br>";
  $carsModels[0] = 'Toyota updated';
  echo "Value of carsModels[0] is ".$carsModels[0]."<br>";

  foreach ($carsModels as $value) {
    echo "$value <br>";
  }

  echo '<h2> Associative Arrays </h2>';
  $car = array('brand' => 'Toyota', 'model' => 'Camry', 'year' => 2020);
  var_dump($car);
  echo '<br>';

  echo 'Value of car["brand"] is '.$car['brand'].'<br>';
  $car['brand'] = 'Toyota updated';
  echo 'Value of car["brand"] is '.$car['brand'].'<br>';

  foreach ($car as $key => $value) {
    echo "$key => $value <br>";
  }

  $cars = array("Volvo", "BMW", "Toyota");
  foreach ($cars as &$x) {
    $x = "Ford";
  }
  unset($x);
  var_dump($cars);

  echo '<br>';
  echo '<h2> Add items Arrays </h2>';
  $fruits = array("Apple", "Banana", "Cherry");
  var_dump($fruits);
  echo '<br>';
  $fruits[] = "Orange";
  var_dump($fruits);
  echo '<br>';
  $fruits[] = "Grapes";
  var_dump($fruits);
  echo '<br>';

  $carsData = array("brand" => "Ford", "model" => "Mustang");
  var_dump($carsData);
  echo '<br>';
  $carsData["year"] = 2020;
  var_dump($carsData);
  echo '<br>';

  array_push($fruits, 'Pinia', 'Mango');
  var_dump($fruits);
  echo "<br>";

  $carsData += ['plate' => 'BMW', 'color' => 'red'];
  var_dump($carsData);
  echo '<br>';

  var_dump(array_merge($carsData, ['data' => 'Toyota']));

  echo '<br>';
  echo '<h2> Remove items Arrays </h2>';
  array_splice($fruits, 4, 6);
  var_dump($fruits);
  echo '<br>';
  array_pop($fruits);
  var_dump($fruits);
  echo '<br>';

  array_shift($fruits);
  var_dump($fruits);
  echo '<br>';

  echo '<br>';
  echo '<h2> Sort items Arrays </h2>';
  $fruits = array("Apple", "Banana", "Cherry", "Aa");
  sort($fruits);
  var_dump($fruits);
  echo '<br>';
  rsort($fruits);
  var_dump($fruits);

  echo 'Reverse array';
  $age = array("Peter"=>"35", "aen"=>"57", "Joe"=>"43");
  asort($age);

  print_r($age);

  echo "<br>";
  echo '<h2> Multidimensional arrays </h2>';

  $carsArrays = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15),
  );

  echo $carsArrays[0][0].": In stock: ".$carsArrays[0][1].", sold: ".$carsArrays[0][2].".<br>";
  echo $carsArrays[1][0].": In stock: ".$carsArrays[1][1].", sold: ".$carsArrays[1][2].".<br>";
  echo $carsArrays[2][0].": In stock: ".$carsArrays[2][1].", sold: ".$carsArrays[2][2].".<br>";
  echo $carsArrays[3][0].": In stock: ".$carsArrays[3][1].", sold: ".$carsArrays[3][2].".<br>";

  echo "<table>";
  echo "<tr><th>Brand</th><th>Stock</th><th>Sold</th></tr>";

  foreach ($carsArrays as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
      echo "<td>" . $cell . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
?>

</body>
</html>