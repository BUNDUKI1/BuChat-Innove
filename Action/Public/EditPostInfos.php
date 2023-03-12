<?php

require('Action/Public/EditPostAction.php');


//verifier si l'id de la pub est bien passee
    if(isset($_GET['id']) AND !empty($_GET['id'])){
        
        $Post_id=$_GET['id'];
    
//verifier si la pub existe


        $CheckIfPostExists=$bdd->prepare('SELECT * FROM publications WHERE id=?');
        $CheckIfPostExists->execute(array($Post_id));

        if($CheckIfPostExists->rowCount()>0){
//recuperer les infos de la pub
            $Post_infos=$CheckIfPostExists->fetch();
              
            if($Post_infos['id_auteur']==$_SESSION['id']){
  
                    $Post_date=$Post_infos['date_post'];
                    $Post_date=$Post_infos['pseudo_auteur'];
                    $Post_Desc=$Post_infos['contenu'];
                    $Post_Desc= str_replace('<br />', '',$Post_Desc);
                

                }else{
                    $errorMsg= "Vous ne pouvez pas modifier cette publication, vous n'en êtes pas l'auteur";
                }

        }else{
            $errorMsg= "";
        }


    }else{
        $php_errormsg='Veuillez selectionner une publication';

    }