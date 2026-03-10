<?php
require 'connexion.php';

try{
    $sql= "SELECT * FROM Utilisateur";
    $stmt= $pdo->query($sql);

    $Utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($Utilisateurs as $user){
        echo "ID : " . $user['id'] . " - Nom : " . $user['nom'] . " - Email : " . $user['email'] . "<br>";

    }
}catch(PDOException $e){
    echo "Eruure : " . $e->getMessage();
}

echo "<table border='1'>
<tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
foreach($Utilisateurs as $user) {
    echo "<tr><td>{$user['id']}</td><td>{$user['nom']}</td><td>{$user['email']}</td></tr>";
}
echo "</table>";