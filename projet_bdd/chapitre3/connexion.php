<?php
$host='localhost';
$dbname='blogdb';
$username='root';
$password='';

try{
    $pdo = new pdo("mysql:host=$host;dbname=$dbname;charset=utf8",$username , $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo "connexion réusse à la base $dbname";
}catch(PDOException $e){
    echo "Errure : " . $e->getMessage();
}


?>