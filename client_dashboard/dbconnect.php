<?php

  $servername = "localhost";
  $username = "root";
  $password= "";
  $dbname="sample_web_service";

  try{
    $conn = new PDO("mysql:host=$servername; dbname=$dbname",$username,$password);
    // echo "connected";
  }

  catch(PDOException $e){
    echo "Connection failed: ". $e->getMessage();
  }


?>