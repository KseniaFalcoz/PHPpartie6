<?php
if(!empty($_GET['lastnameForm']) && !empty($_GET['firstnameForm'])){
    echo htmlspecialchars($_GET['lastnameForm']).' '.strip_tags($_GET['firstnameForm']);
}else{
    echo 'Veuillez vérifier votre saisie !';
}
?>