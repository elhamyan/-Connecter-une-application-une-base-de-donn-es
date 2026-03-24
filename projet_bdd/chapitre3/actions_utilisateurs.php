<?php
require 'connexion.php';
//étape1:
try{
    $stmt=$pdo->prepare("INSERT INTO Utilisateur(nom,email) values (:nom, :email)");
    $stmt->execute([
        'nom' => 'Charlie',
        'email' => 'charlie@test.com'
    ]);
    echo "utilisateur ajauté avec succés";
}catch(PDOException $e){
    echo "Errure : " . $e->getMessage();
}
//étape2:
$stmt=$pdo->prepare("UPDATE Utilisateur set email =:email where id =:id");
$stmt->execute([
    'email'=>'charlie.aze@test.com',
    'id'=>'9'
]);
//étapr3
$stmt = $pdo->prepare("DELETE FROM Utilisateur WHERE id = :id");
$stmt->execute(['id' =>7]);
echo "Utilisateur supprimé.";


echo $stmt->rowCount() . " ligne(s) affectée(s).";


?>