<?php
//la fonction aui valide le mot de passe
function passwdIsValid($passwd){
    //la condition pour la longueur du mot de passe 
    if (strlen($passwd) < 6 || strlen($passwd) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères";
    }
    //la fonction rentre dans else si et seulement si la longueur du mot de passe est correcte 
    else{
        echo "</br>";
        //definition du salt
        $salt='unPeuDeSel2706*';
        echo "Le mot de passe avec le Salt est : ";
        //affichage du mot de passe concatene au salt 
        echo $salt.$passwd;
        echo "</br>";
        echo "</br>";
        echo "Le mot de passe chiffre est : ";
        //affichage du mot de passe encode
        echo md5($salt.$passwd);
    }
}
?>