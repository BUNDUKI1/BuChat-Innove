<?php

require('Action/Public/ShowPostContentAction.php');
require('Action/database.php');


$GetAllComments=$bdd->prepare('SELECT * FROM comments WHERE id_Post=? ORDER BY id DESC');
$GetAllComments->execute(array($Article_id));  


                

                
         