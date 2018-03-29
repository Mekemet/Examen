<?php

$server="localhost";
$login="root";
$passwd="root";
$dbname="dev";
$con =new PDO('mysql:host='.$server.';dbname='.$dbname.';charset=utf8',$login,$passwd);

?>