<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <h1>Form Handling</h1>
  <form action="welcome.php" method="post">
    name: <input type="text" name="name" id=""><br>
    Email: <input type="email" name="email" id=""><br>
    <input type="submit" value="Submit">
  </form>
  <br>
  <br>
  <h1>Form Handling GET</h1>
  <form action="welcome_get.php" method="get">
    name: <input type="text" name="name" id=""><br>
    Email: <input type="email" name="email" id=""><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>