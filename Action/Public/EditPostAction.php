<?php require('Action/database.php');

//require('Action/Users/Security.php');
//valider le formulaire

if(isset($_POST['Validate'])){

//verifier si les champs sont bien remplis
    if(!empty($_POST['Post'])){
//modifier les infos de la pub
        $New_PostDesc=nl2br(htmlspecialchars($_POST['Post']));

        $EditPost=$bdd->prepare('UPDATE publications SET contenu=? WHERE id=?');
        $EditPost->execute(array( $New_PostDesc, $_GET['id']));
//rediriger l'user la page des pubs

        header('Location: MyPost.php');

    } else {
        $errorMsg= 'Vous ne pouvez pas enregistrer cette page';
    }
}
if(isset($_POST['Cancel'])){
    header('Location: MyPost.php');
}