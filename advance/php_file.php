<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File </title>
</head>
<body>
  <h1>My first PHP page</h1>
  <?php
    echo readfile('webdictionary.txt');
  ?>
</body>
</html>