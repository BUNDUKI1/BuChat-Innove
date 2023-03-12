<?php

require ('Action/database.php');

//validation du formulaire
if(isset($_POST['Validate'])){
//verifier si user a bien complete les champs
    if(!empty($_POST['Email']) AND !empty($_POST['Pseudo']) AND !empty($_POST['FirstName']) AND !empty($_POST['Name']) AND !empty($_POST['Password'])){
        $User_mail=htmlspecialchars($_POST['Email']);
        $User_Pseudo=htmlspecialchars($_POST['Pseudo']);
        $User_Firstname=htmlspecialchars($_POST['FirstName']);
        $User_Name=htmlspecialchars($_POST['Name']);
        $User_password=htmlspecialchars($_POST['Password']);
//verifier si l'user existe
        $CheckIfUserAlreadyExists= $bdd->prepare('SELECT Pseudo FROM users WHERE Pseudo=?');
        $CheckIfUserAlreadyExists->execute(array($User_Pseudo));

        if($CheckIfUserAlreadyExists->rowcount()==0){
//inserer l'user dans la bdd
            $InsertUser= $bdd->prepare('INSERT INTO users(Adresse_mail,Pseudo,Prenom,Nom,mdp)VALUES(?,?,?,?,?)');
            $InsertUser->execute(array($User_mail, $User_Pseudo, $User_Firstname,$User_Name,$User_password));
//recuperer les infos de l'user
            $GetUserId = $bdd->prepare('SELECT id,Adresse_mail,Pseudo,Prenom,Nom FROM users WHERE Adresse_mail=? AND Pseudo=? AND Prenom=? AND Nom=?');
            $GetUserId->execute(array($User_mail, $User_Pseudo, $User_Firstname, $User_Name));

            $UserInfos = $GetUserId->fetch();

 //Authetifier l'user a sa connexion sur le site
            
 session_start();
            $_SESSION['auth'] = true;
            $_SESSION['Emai']=$UserInfos['Adresse_mail'];
            $_SESSION['id'] = $UserInfos['id'];
            $_SESSION['Pseudo'] = $UserInfos['Pseudo'];
            $_SESSION['FirstName'] = $UserInfos['Prenom'];
            $_SESSION['Name'] = $UserInfos['Nom'];

   //on redirige l'user sur sa page d'accueil
        header('Location: Accueil.php');

        }else{

            $errorMsg= "L'utilisateur existe";
        }

    }else{
        $errorMsg="Les champs sont vides";
    }
}