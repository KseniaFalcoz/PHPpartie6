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
<h2>Exercice 3</h2>

<?php
if(empty($_POST['lastName']) || empty($_POST['firstName'])){
    ?>
<div>
<form action="exo3b.php" method="post">
    <label for="civility">Civilité : </label>
    <select id="civility" name="civility">
        <option value="mme">Mme</option>
        <option value="mr">Mr</option>
    </select>

    <label for="fname">Prénom : </label>
    <input type="text" id="firstName" name="firstName" placeholder="Votre prénom" require>

    <label for="lname">Nom : </label>
    <input type="text" id="lastName" name="lastName" placeholder="Votre nom" require>

    <input type="submit" value="Submit">
</form>
</div>

<?php 
$verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";

if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['civility'])){
    if(preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
    echo 'Bonjour '. ' ' . $_POST['civility']. ' ' . $_POST['firstName']. ' ' . $_POST['lastName'];
    }else{
        echo ' Veuillez vérifier votre saisie !';
}}}
?>
</body>
</html>