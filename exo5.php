<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Exercices PHP Partie 6</title>
</head>
<body>
<h1>Exercices PHP Partie 6</h1>
<h2>Exercice 5</h2>

<?php
if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
?>

<form id="form" action="exo5.php" method="post" enctype="multipart/form-data">
    <label for="civility">Civilité : </label>
    <select id="civility" name="civility">
        <option value="Mme">Mme</option>
        <option value="Mr">Mr</option>
        <option value="Autre">Autre</option>
    </select>

    <label for="fname">Prénom : </label>
    <input type="text" id="firstName" name="firstName" placeholder="Votre prénom" required>

    <label for="lname">Nom : </label>
    <input type="text" id="lastName" name="lastName" placeholder="Votre nom" required>
    
    <input type="file" name="fichier">

    <input type="submit" value="Submit">
</form>

<?php
}else{
    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['civility'])) {
    echo strip_tags('Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' ! Le nom du fichier envoyé est :'. ' ' . $_FILES['file']['name']);
}}
?>

</body>
</html>