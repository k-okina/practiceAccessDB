<?php
$dsn = 'mysql:dbname=practice;host=localhost';
$user = 'root';
$password = 'root';
try{
    $dbh = new PDO($dsn, $user, $password);
    print('Success');
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}
