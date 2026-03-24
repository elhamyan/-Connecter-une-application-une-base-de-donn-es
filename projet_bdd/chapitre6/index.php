<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);

    if (!empty($nom) || !empty($email)) {
        echo "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email invalide.";
    } else {
        echo "Bonjour $nom, votre email est $email.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajout_utilisateur_secure.php" method="post">
        <label>nom</label>
        <input type="text" name="nom">
        <label>email</label>
        <input type="text" name="email">

        <button type="submit">envoyer</button>

    </form>
</body>
</html>