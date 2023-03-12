<?php 

require ('Action/database.php');

if (isset($_POST['Validate'])) {
    if(!empty($_POST['Pseudo']) AND !empty($_POST['Password'])) {
        $User_Pseudo = htmlspecialchars($_POST['Pseudo']);
        $User_password=htmlspecialchars($_POST['Password']);
//Verifier si le pseudo user est correct
        $CheckIfUserExists = $bdd->prepare('SELECT * FROM users WHERE Pseudo=?');
        $CheckIfUserExists->execute(array($User_Pseudo));

        if($CheckIfUserExists->rowCount() > 0) {
//Recuperer les infos utilisateur          


        $UserInfos = $CheckIfUserExists->fetch();
//verifier si le mot de passe est correct

           if($User_password==$UserInfos['mdp']){

//Authetifier l'user a sa connexion sur le site
        session_start();
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $UserInfos['id'];
                $_SESSION['Pseudo'] = $UserInfos['Pseudo'];
                $_SESSION['FirstName'] = $UserInfos['Prenom'];
                $_SESSION['Name'] = $UserInfos['Nom'];
                
//Rediriger l'user vers la page d'accueil          
                header('Location: Accueil.php');


            }else{
                $errorMsg = "Mot de Passe incorrect";

                $bascule  ='
            

            <p> Password forgotten? </p>
            

';
            }

        }else{
            $errorMsg = "utilisateur non trouvé";
        }

    }else {
        $errorMsg = "Les champs sont vides";
    }
}