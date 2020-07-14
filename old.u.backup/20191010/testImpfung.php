

<head>
<title>Impfung</title>
</head>
<body>

<?php
ini_set("display_errors",1);
       error_reporting(E_ALL);


$myTable=$_POST['tradeName'];
#$myTable="TradeMark";

if ($myTable == "TradeMark"){
echo "TradeMark";
}
elseif ($myTable == "Contraindications"){
  echo "Contraindications";

}
elseif($myTable == "Disease"){
  echo "Disease";
}
  else{
    echo "no resuts";
  }


?>

</body>


</html>
