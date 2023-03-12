<?php
require('../database.php');
require('../Users/Security.php');
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        $PostId=$_GET['id'];

        $CheckIfPostExist=$bdd->prepare('SELECT * FROM publications WHERE id=?');
        $CheckIfPostExist->execute(array($PostId));


        if($CheckIfPostExist->rowCount()>0){
            $PostInfosToDelete=$CheckIfPostExist->fetch();

            if($PostInfosToDelete['id_auteur']==$_SESSION['id']){

                $DeletePost=$bdd->prepare('DELETE FROM publications WHERE id=?');
                $DeletePost->execute(array($PostId));

                header('Location: ../../MyPost.php');
            } else{
                echo "You can't delete this post, you're not his author"; 
            }

            
        } else{
            echo 'No post found';
        }

    }else{
        echo 'Select a post to be deleted';
    }