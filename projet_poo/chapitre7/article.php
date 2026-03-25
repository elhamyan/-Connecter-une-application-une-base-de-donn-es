<?php

//Étape 1 : Définir la classe
class Article{
    public $titre;
    public $contenu;
    public function afficher() {
        return "--titre :". $this->titre . "--contenu : " . $this->contenu;

    }
}


//Étape 2 : Créer un objet et définir ses propriétés
$article1 = new Article();
$article1->titre = "<strong>Introduction à php </strong><br>";
$article1->contenu = "<strong> php est un langage de script coté serveur</strong><br>";
echo $article1->afficher();


//Étape 3 : Créer plusieurs objets
$article2 = new Article();
$article2->titre = "<strong>Programmation orientée objet</strong><br>";
$article2->contenu = "<strong>La POO facilite la modularité et la maintenance.</strong>";

echo "<br>" . $article2->afficher();