<?php

$HOST = "localhost";
$USERNAME ="root";
$PASSWORD = "";
$DB = "orders_db";

try{
    $conn= New PDO("mysql:host=$HOST;dbname=$DB",$USERNAME,$PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 echo "Database gracecollege_db succesfully connected";
}

catch(PDOException $e){
    echo "connection failed".$e->getMessage();
}

?>