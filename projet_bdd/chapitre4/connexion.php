<?php
$host='localhost';
$dbname='blogdb';
$username='root';
$password='';

try{
    $pdo= new PDO('mysql:host=localhost;dbname=blogdb','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connexion réussie";
}catch(PDOException $e){
    echo "Erreur : ". $e->getMessage();
}

try {
    $pdo->query("SELECT * FROM table_inexistante");
} catch (PDOException $e) {
    file_put_contents('erreurs.log', $e->getMessage().PHP_EOL, FILE_APPEND);
    echo "Une erreur est survenue. Contactez l'administrateur.";
}

