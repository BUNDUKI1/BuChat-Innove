<?php
require('Action/Users/Security.php');
require('Action/database.php');

if(isset($_POST['Validate'])){
    if(!empty($_POST['Post'])){
        $PostDescription=nl2br(htmlspecialchars($_POST['Post']));
        $PostDate=date('y/m/d');
        $PostAuthorId=$_SESSION['id'];
        $PostPseudo_Author =$_SESSION['Pseudo'];

        $InsertPost=$bdd->prepare('INSERT INTO publications(contenu, id_auteur, pseudo_auteur, date_post) VALUES(?,?,?,?)');
        $InsertPost->execute([$PostDescription, $PostAuthorId, $PostPseudo_Author, $PostDate]);
       
        header('Location: MyPost.php');

        $successMsg ="Vous venez de faire une publication... Felicitations";

        
}else{
    $errorMsg= 'Vous ne pouvez pas publier une page vierge';
}

} if(isset($_POST['Cancel'])){
    header('Location: MyPost.php');
}