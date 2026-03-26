<?php 
require 'BlogArticle.php';

$article = new BlogArticle("POO en PHP", "Découvrire lhéritage.", "Alice");
echo $article->afficher();
