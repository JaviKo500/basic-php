<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation</title>
  <style>
    .error {color: #FF0000;}
  </style>
</head>
<body>

  <?php
    $name = $email = $website = $comment = $gender = "";
    $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
      $name = testInput($_POST['name'] ?? '');
      if ( empty($name) ) {
        $nameErr = "Name is required";
      } elseif ( !preg_match("/^[a-zA-Z-' ]*$/", $name) ) {
        $nameErr = "Name can only contain letters, spaces, and hyphens";
      }
      $email = testInput($_POST['email'] ?? '');
      if ( empty($_POST['email']) ) {
        $emailErr = "E-mail is required";
      } elseif (!filter_var( $email, FILTER_VALIDATE_EMAIL ))  {
        $emailErr = "E-mail is invalid";
      }
      $website = testInput($_POST['website'] ?? '');
      if ( empty($website) ) {
        $website = "";
      } elseif (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
      }
      if ( empty($_POST['comment']) ) {
        $comment = "";
      } else {
        $comment = testInput($_POST['comment'] ?? '');
      }
      if ( empty($_POST['gender']) ) {
        $genderErr = "Gender is required";
      } else {
        $gender = testInput($_POST['gender'] ?? '');
      }
    }

    function testInput( string $value ) : string {
      $value = trim($value);
      $data = stripcslashes($value);
      return htmlspecialchars($data);
    }
  ?>

  <h2>PHP Form Validation Example</h2>
  <p><span class="error">* required field</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" required value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error">* <?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <input 
      type="radio" 
      name="gender" 
      <?php if( isset($gender) && $gender === 'female' ) echo 'checked' ?>
      value="female">Female
    <input 
      type="radio" 
      name="gender" 
      <?php if( isset($gender) && $gender === 'male' ) echo 'checked' ?>
      value="male">Male
    <input 
      type="radio" 
      name="gender" 
      <?php if( isset($gender) && $gender === 'other' ) echo 'checked' ?>
      value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">  
  </form>

  <?php
    if ( empty($nameErr) && empty($emailErr) && empty($websiteErr) && empty($commentErr) && empty($genderErr) ) {
      echo '<div style="border: 1px solid black; padding: 10px; margin: 10px;">';
        echo "<h3>Name</h3>";
        echo $name;
        echo "<h3>E-mail</h3>";
        echo $email;
        echo "<h3>Website</h3>";
        echo $website;
        echo "<h3>Comment</h3>";
        echo $comment;
        echo "<h3>Gender</h3>";
        echo $gender; 
      echo "</div>";
    }
  ?>
</body>
</html>