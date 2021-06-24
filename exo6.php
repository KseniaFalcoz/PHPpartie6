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
<h2>Exercice 6</h2>

<?php
if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
?>

<form action="exo6.php" method="post" enctype="multipart/form-data">
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
    
    <input type="file" name="myFile">

    <input type="submit" value="Submit">
</form>

<?php
} else {
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_FILES['myFile'])) {
        
        $infosfichier = pathinfo($_FILES['myFile']['name']); //on récupère le chemin du fichier à uploader
        $extension_upload = $infosfichier['extension']; //on stocke l'extension du fichier selectionné
        $extensions_autorisees = array('pdf'); //on stocke la chaîne "pdf" dans un tableau
        
        if (in_array($extension_upload, $extensions_autorisees)) {  //on recherche si l'extension du fichier existe dans le tableau
            echo 'Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ', le nom de votre fichier est : ' .$_FILES['myFile']['name']. ' !';
        } else {
            echo 'votre fichier n\'est pas au format pdf';
        }
    }
}
?>

</body>
</html>