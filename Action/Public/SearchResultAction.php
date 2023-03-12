<?php

require('Action/Database.php');
//Recuperer les publications par defaut avant recherche
$GetAllPosts=$bdd->query('SELECT id, id_auteur,pseudo_auteur,contenu,date_post FROM publications ORDER BY id DESC LIMIT 0,5');

//verifier si l'user a saisi quelque chose dans la barre de recherche
if(isset($_GET['search']) AND !empty($_GET['search'])){
    //La recherche se procede
    $UsersSearch=$_GET['search'];
//Recuperer les publications correspondant a la recherche de l'user
    $GetAllPosts=$bdd->query('SELECT id, id_auteur,pseudo_auteur,contenu,date_post FROM publications WHERE contenu LIKE "%'.$UsersSearch.'%" OR pseudo_auteur LIKE "%'.$UsersSearch.'%" ORDER BY id DESC');
} else{
    //$errorMsg= "Element you're searching for is not foundable";
}
