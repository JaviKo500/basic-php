<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f2f2f2;">
 <div>
  <h1>Welcome <?php echo ($_POST['name'] ?? 'Anonymous'); ?></h1>
  <p>Your email is <?php echo ($_POST['email'] ?? 'Anonymous@example.com'); ?></p>
  <a href="form_handling.php">Go back</a>
 </div> 
</body>
</html>