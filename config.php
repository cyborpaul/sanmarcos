<?php

session_start();
$server = "localhost";
$username = "root";
$password = "RPJsh8E4a9#C9v";
$dbname = "db_recordarme";

// Create connection
try{
   $conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Unable to connect with the database');
}
