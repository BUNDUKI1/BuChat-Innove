
<?php
        require('Action/database.php');
//verifier si l'id est bien passe
        if(isset($_GET['id']) AND !empty($_GET['id'])){

//recuperer l'id de l'article
            $Article_id=$_GET['id'];
            $checkIfArticleExist=$bdd->prepare('SELECT * FROM publications WHERE  id=?');
//verifier si l'article existe
            $checkIfArticleExist->execute(array($Article_id));

                if($checkIfArticleExist->rowCount()>0){

                    $Post_infos=$checkIfArticleExist->fetch();
                    
                    $Post_contenu=$Post_infos['contenu'];
                    $Post_id=$Post_infos['id'];
                    $Post_idAuteur=$Post_infos['id_auteur'];
                    $Post_pseudoAuteur=$Post_infos['pseudo_auteur'];
                    $Post_date=$Post_infos['date_post'];

                }else{
                    $errorMsg= 'Article not found';
                }
        
        }

