<?php
require 'connexion.php';
//étape1:
try{
$stmt=$pdo->prepare("INSERT INTO Utilisateur(nom,email) values (:nom, :email)");
$stmt->execute([
    'nom'=>'khadija',
    'email'=>'khadija@test.com'
]);
echo "utilisateur ajouté";
}catch(PDOException $e){
    echo "errure : " . $e->getMessage;
}
  
//étape2:
try{
    $nom='yousra';
    $email='youssra@testz.com';
    $stmt= $pdo->prepare("INSERT INTO Utilisateur(nom,email) vALUES(:nom,:email)");
    $stmt->bindparam(':nom',$nom);
    $stmt->bindparam(':email',$email);
    $stmt->execute();

}catch(PDOException $e){
    echo "Errure :" . $e->getMessge();
}
//étape3:
try{
    $stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE nom = :nom");
$stmt->execute(['nom' => 'yousra']);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "Email : " . $user['email'];
}catch(PDOException $e){
     echo "Errure :" . $e->getMessge();
}
//étape4:
try{
$stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE id = ?");
$stmt->execute([29]);
}catch(PDOException $e){
    echo "Errure :" . $e->getMessge();
}
?>