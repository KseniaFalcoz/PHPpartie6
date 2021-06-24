<?php
$verifName = "/^[A-Z\.\-]+[A-Za-z\.\-]+[^0-9]$/";

if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && preg_match($verifName, $_POST['lastName']) && preg_match($verifName, $_POST['firstName'])){
    echo 'Bonjour '.' '. $_POST['firstName'] .' '. $_POST['lastName']; 
}else{
    echo 'Veuillez remplir les champs correctement !'; 
}
?>