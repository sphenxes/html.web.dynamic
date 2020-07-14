

<head>
<title>Impfung</title>
</head>
<body>

<?php
ini_set("display_errors",1);
       error_reporting(E_ALL);

/*
$myTable=$_POST['tableName'];
$myTable01=$_POST['tableContra'];
$myTable02=$_POST['tableDisease'];
*/

if (!empty($_POST['tableName'])) {
   echo "Table Name";
}


if (!empty($_POST['tableDisease'])) {
   echo "Table disease";
}

if (!empty($_POST['tableContra'])) {
   //do something here;
   echo "Table Contraindications";
}

/*
#$myTable="TradeMark";

if ($myTable == "TradeMark"){
echo "TradeMark";
}
elseif ($myTable01 == "Contraindications"){
  echo "Contraindications";

}
elseif($myTable02 == "Disease"){
  echo "Disease";
}
  else{
    echo "no resuts";
  }

*/

?>
</body>


</html>
