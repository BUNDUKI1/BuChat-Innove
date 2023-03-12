<?php

require('Action/database.php');
require('Action/Public/EditPostInfos.php');


$getAllMyPosts=$bdd->prepare('SELECT id,contenu,id_auteur,pseudo_auteur,date_post FROM publications WHERE id_auteur=? ORDER BY id DESC');
$getAllMyPosts->execute(array($_SESSION['id']));


