<?php

$host = '0.0.0.0';
$dbname = 'fuel-dataviz';
$username = 'postgres';
$password = 'password';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
try{
    $conn = new PDO($dsn);
}catch (PDOException $e){
    echo $e->getMessage();
}
?>