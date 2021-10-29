<?php
$hostname = 'localhost';
$ussername = 'Kirill';
$password = '2844';
$bdname = 'Login';

try
{
    $pdo = new PDO('mysql:host='. $hostname .';dbname='. $bdname, $ussername, $password);
}
catch (PDOException $e)
{
    exit('Error Connecting To DataBase');
}
