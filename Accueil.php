<?php require('Action/Users/Security.php');
require('Action/Public/MyPostAction.php');
require('Action/Public/SearchResultAction.php');
//require('Action/database.php');
//require ('Action/Users/Security.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'Includes/Head.php';?>
</head>
<body style="background-color: whitesmoke; border-bottom: 3px solid darkblue;">
    <h1>Accueil</h1>

<br>

<a href="PublishItems.php" class="btn btn-primary">Post  </a>
<input type="text" value="Publier du contenu" placeholder="Publier une actu!">
 

<br> <br>
                <?php
                    while($Posts=$GetAllPosts->fetch()){

                        

        ?>
        <div class="container" style="width:400px; background-color: white; border-radius: 20px;">
            
                       
                            <div class="card-header" style="font-style:bolder; padding-left: 5; border-bottom: 1px solid whitesmoke;font-family:verdana ; font-size:20px;">  
                            <h4> <img src="ProfilePic.php?id=<?=$Posts['id_auteur'];?>"
                             width="35" height="30" class="rounded-circle" >

                            <?php if ($_SESSION['id']== $Posts['id_auteur']) {
                                ?>
                              <a href="Profile.php" > <?= $Posts['pseudo_auteur'];?> </a> *  </h4> Moi
                            <?php }else{

                                ?>
                            <a href="Profil.php?id=<?=$Posts['id_auteur'];?>" > <?= $Posts['pseudo_auteur'];?> </a> *  </h3> author

                            <?php
                            } ?>

                          </div>
                            <div class="card-body" style="font-family:Tahoma; font-size: 18px; padding-left: 20px;padding-bottom: 20px;padding-top: 20px;padding-right: 20px; border-bottom: 1px solid whitesmoke;background-color:whitesmoke; border-radius: 20px; ">
                            <!--<?= $Posts['photo_post'];?> -->
                            <?= $Posts['contenu'];?>
                            </div>

                        <div class="card-footer" style="font-style:italic; display: inline-flex;">
                            <?= 'Published the '.$Posts['date_post'];?>
                            
                            <a class="btn btn" href="Articles.php?id=<?=$Posts['id'];?>"> More </a>
                            <a onclick="bascule('Commenter')" class="btn btn">comment</a>
                           
                           <div style="width:fit-content; display: inline-flex;">
                            
                            <a onclick="incrementClick()" class="btn btn" style="border-radius: 20px; ">iLike <p id="ilike-div">0</p> </a>

                            <a onclick="resetCounter()">iDislike</a>
                        </div>
                      <br>
                        </div>
                            <form class="form-group" name="Commenter" id="Commenter" method="POST" style="visibility: visible; width:fit-content;display:inline-flex;" >  
                      
                            <textarea  name="Comment" class="form-control" cols="30" rows="1" style="border-radius: 50px;"></textarea> <br>
                            <a type="submit" name="Validate"> <img src="https://th.bing.com/th/id/R.ac9091a8bdcbbd5fe948a2f8a41e6cac?rik=OTLJ%2fJV%2bJRhAZQ&pid=ImgRaw&r=0" width="40" height="40" background-color="white" > </a>

            
                            </form>
                            <style type="text/css">
                                .a submit:hover{
                                    visibility: hidden;
                                    transition-timing-function: all 2s;

                                }

                            </style>
                              <br>   <br> 

                    </div>
                               
                                 <br>   <br>  
            <div class="container" style="border-bottom:2px solid white; width: 500px;"></div>   <br>    
        </div>
                        <?php
                    }

                   
                ?>

                                 <br> <br> 

</body>

<footer>
    <?php include 'Includes/footer.php';?>
</footer>
</html>
