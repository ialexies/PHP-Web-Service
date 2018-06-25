<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";

try{
    $db=new PDO
    (
        "mysql:host=localhost;
        dbname=groundgurus", 
        $dbuser,
        $dbpass
    );
    // echo "database connected";
}
catch(Exception $error){
    echo "Error Connecting to database";
}



?>