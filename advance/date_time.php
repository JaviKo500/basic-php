<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date and Time</title>
</head>
<body>
  <h1>Date and Time</h1>
  <?php 

    echo "Today is ". date('Y/m/d')."<br>"; 
    echo "Today is ". date('Y.m.d')."<br>"; 
    echo "Today is ". date('Y-m-d')."<br>"; 
    echo "Today is ". date('l')."<br>"; 
    echo "&copy 2010-". date('Y')."<br>";
    echo "Time is ". date('H:i:s')."<br>";
    echo "Time is ". date('h:i:s a')."<br>";
    date_default_timezone_set('America/guayaquil');
    echo "The current date and time is " . date("Y-m-d H:i:s")."<br>";
    echo date_default_timezone_get()."<br>";
    date_default_timezone_set('utc');
    $d = mktime(0,0,0,10,3,1975);
    echo "October 3rd, 1975 at midnight was a ".date("l",$d).".<br>";
    echo "Now: ".time()."<br>";
    $ts = time();
    $curTime = date("Y-m-d H:i:s", $ts);
    echo "Current time is $curTime.<br>";
    $d = strtotime("10:30pm November 15 2025");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("now");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("+5 days");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
    echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

    $d = strtotime("last Sunday");
    echo "Date is " . date("Y-m-d H:i:s", $d);

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
      echo date("M d", $startdate) . "<br>";
      $startdate = strtotime("+1 week", $startdate);
    }
  ?>
</body>
</html>