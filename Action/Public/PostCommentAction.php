<?php

require('Action/database.php');

if(isset($_POST['Validate']) AND !empty($_POST['Comment'])){

    

            $UserComment=nl2br(htmlspecialchars($_POST['Comment']));
            $idCommentPoster=$_SESSION['id'];
            $PseudoCommentPoster =$_SESSION['Pseudo'];
            $DateComment=date('d/m/y');
       

            $InsertComment=$bdd->prepare('INSERT INTO comments (Comment,id_Post,id_Poster,Pseudo_Poster,Date_Comment) VALUES (?,?,?,?,?)');
            $InsertComment->execute(array($UserComment, $Article_id, $idCommentPoster, $PseudoCommentPoster,$DateComment));
   
            header("Location:Articles.php?id=$Article_id");
    } else{

           $errorMsg= (" Vous ne pouvez pas publier un commentaire vide! ");
    }
