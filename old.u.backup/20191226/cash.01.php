

<head>
<title>Kassa</title>
</head>
<body>

<?php

ini_set("display_errors",1);
       error_reporting(E_ALL);

/*
$servername="localhost:3306";
$username="hesham";
$password="Hysedchshm0204";
$database="News";

$connection = mysqli_connect($servername, $username, $password, $database);

#http://richardcummings.info/apostrophe-input-form-php-mysql-the-easy-solution/
*/

$StartMoneyInKassa= 440;

function floor05($input) {
  //round down to the lowest 5
    $input = $input/5;
    $input = floor($input);
    $input = 5*$input;
    return $input;
  }


$myHundruds=($_POST['hundruds'] * 100);
$myFifties=($_POST['fifties'] * 50);
$myTweenties=($_POST['tweenties'] * 20);
$myTens=($_POST['tens'] * 10);
$myFives=($_POST['fives'] * 5);


$sumKassaPaper = ($myHundruds + $myFifties + $myTweenties + $myTens + $myFives);
echo "Sum of Paper Money in Kassa is: " . $sumKassaPaper . "<br>";


$reusltOfKassa = $sumKassaPaper + 880;

echo "last Result" .$reusltOfKassa ."<br>";


?>
<br>
<br>
<br>
<a href= "http://localhost/cash.01.html"> Click Here to Return to Home  </a>

</body>


</html>
