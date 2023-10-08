<?php
    //appel a functions.php
    require_once("functions.php");
    if($_POST){
        //reprendre le mot de passe rentre par lutilisateur
        $password=$_POST['fpasswd'];
        //tester si c vide
        if(empty($password)){
            echo "</br> Mot de passe vide";
        }
        //sinon faire appel a la fonction qui valide le mdp
        else{
            echo "</br> Mon mot de passe est : " . $password;
            echo "</br>";
            $passwordValid = passwdIsValid($password);
            echo "</br>";
            echo $passwordValid;
        }
    }
?>