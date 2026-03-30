<?php
require 'Database.php';
$db = (new Database())->getConnection();
$stmt = $db->query("SELECT * FROM article");

$article = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($article as $article) {
    echo $article['titre'] . " - " . $article['id_utilisateur'] . "<br>";
}
 
$sql ="INSERT INTO article (titre, contenu, id_utilisateur) VALUES (:titre,:contenu,:id_utilisateur) ";
$stmt = $db->prepare($sql);
$stmt->execute([
    'titre'=>'Nouveau post',
    'contenu'=>'ceci est un article ajouté via PDO',
    'id_utilisateur'=>40
]);

$stmt = $db->prepare("UPDATE article SET id_utilisateur = :id_utilisateur WHERE id = :id");
$stmt->execute(['id_utilisateur' =>27,'id' => 32]);

$stmt = $db->prepare("DELETE FROM article WHERE id = :id");
$stmt->execute(['id' => 40]);