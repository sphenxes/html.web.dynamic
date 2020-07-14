<?php


echo "Hello";

#$connection = new myqli("localhost", "tutorial", "Hysedcttrl0204", "Herbs");
$connection = myqli_connect('localhost', 'tutorial', 'Hysedcttrl0204', 'Herbs')
or die(mysql_error('Connection Error');

#if(!$connection){

#echo "Connection error".mysqli_connect_error();

#}

echo "connection is Sucsessful";



?>
