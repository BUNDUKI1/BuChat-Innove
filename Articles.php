<?php
session_start();
require('Action/Public/ShowCommentsAction.php');
require('Action/Public/PostCommentAction.php');
require('Action/Public/ShowPostContentAction.php');



?>

<!DOCTYPE html>
<html lang="en">

        <?php
                include('Includes/Head.php')

        ?>
<body style="background-color:whitesmoke ;">
            
        <?php
                include('Includes/Navbar.php')

        ?>
 <br>  <br>

    <div class="container" style="width:fit-content;" >

                    <?php

        //if(isset($errorMsg)) {
           // echo '<p style="color:red;">' . $errorMsg . '</p> ';}else

           // { 
                    if(isset($_POST['Validate']) AND isset($errorMsg))
                        
                        {
                            echo '<p style="color:red;">' . $errorMsg . '</p> ';
                        }
                    
                    
                        if(isset($Post_date)){
                            ?>
                                
                            
        <section class="Show-Content">

            <div class="container" style="width:400px; background-color: white; border-radius: 20px;">

                <div class="card-header" style="font-style:bolder; padding-left: 5; border-bottom: 2px solid whitesmoke;font-family:verdana ; font-size:20px;">
                    <h4> 
                      <?php if($Post_idAuteur==$_SESSION['id']){

                            ?>
                            <a  href="Profile.php?id=<?= $_SESSION['id'];?>"><img src="ProfilePic.php?id=<?=$Post_idAuteur;?>"
                             width="35" height="30" class="rounded-circle" ><?= $_SESSION['Pseudo'];?> </a><h6>*Me </h6>
                           <?php } else{
                            ?>
                            <a  href="Profil.php?id=<?= $Post_idAuteur;?>"><img src="ProfilePic.php?id=<?=$Post_idAuteur;?>"
                             width="35" height="30" class="rounded-circle" > <?= $Post_pseudoAuteur;?></a><h6>*Auteur</h6>
                    </h4>
                            <?php
                                    
                           }  ?>   
                </div>
                                
                <div class="card-body" style="font-family:Tahoma; font-size: 18px; padding-left: 20px;padding-bottom: 20px;padding-top: 20px;padding-right: 20px; border-bottom: 2px solid whitesmoke; border-radius: 20px; ">
                                    
                    <p><?= $Post_contenu;?></p>
                </div>
                                
                <div class="card-footer">

                <p> Public since <?=$Post_date;?></p>
                        <a href="#"><img src="https://th.bing.com/th/id/OIP.hCiM1he-FgLsYVf6aMtv8gHaHa?pid=ImgDet&rs=1" alt="Comment" width="40" height="35"></img></a>
                        <a href="ilike"><img src="https://th.bing.com/th/id/R.dc124679726a20dc2cad0aaefdfdb312?rik=%2fcH325%2bVj%2fww8A&pid=ImgRaw&r=0" alt="iLike" width="40" height="35"></img></a>
                        <a href="SharePostAction.php"><img src="https://th.bing.com/th/id/R.d6e5673556df5e6e52e47db05ce4fa4d?rik=pSjwa1F%2fF5eNIg&pid=ImgRaw&r=0" alt="Share" width="40" height="35"></img></a>
                </div>
            </div>
        </section>  
         <br>     <br>
    <div class="container" >
                    <?php

                    while ($AllComments=$GetAllComments->fetch()){

                        $Comment_Author=$AllComments['Pseudo_Poster'];
        $Comment_idPoster=$AllComments['id_Poster'];
        $Comment_idPost=$AllComments['id_Post'];
        $Comment=$AllComments['Comment'];
        $Comment= str_replace('<br />', '',$Comment);
        $Comment_date=$AllComments['Date_Comment'];
               
        ?>
                    <br> <br>

            <div style="border-radius:20px;background:none;width:content;">
                           
                    <h5> <?php if($Comment_idPoster==$_SESSION['id']){ ?>
                        <a href="Profile.php?id=<?=$_SESSION['id'];?>"> <?=$_SESSION['Pseudo'];?> </a> <?php }else{ ?><a href="Profiles.php?id=<?=$Comment_idPoster;?>"> <?=$Comment_Author;?>
                        </a> <?php };?></h5>
                           <!--<div class="card-header">
                            </div>-->
                <div class="speech bubble" style="
                /* Creating a box with a text
                   and some stylings  */
               
                    background: darkgreen;
                    padding: 20px;
                    text-align: justify-all;
                    font-size: 12px;
                    text-decoration-color: white;
                    border-radius: 20px;
                    color: white;
                    position: relative;
                          
                ">     
                  <p><?=$Comment?></p>
                </div>
                <div class="card-footer">
                       <?=$Comment_date;?>
                       <a href="#">Answer</a>
                      <br>
                </div>

                    <?php
                        }

                    ?>

            </div>
                        
    </div>
         <br>  <br>

    <div class="container" >
        <section class="Show-Answers" style="visibility: visible; display:inline-flex;"  >
            <div class="container">
                <form class="form-group" method="POST" > 
                    <div class="card-body">
                        <div class="mb-3" >

                            <textarea  name="Comment" class="form-control" cols="30" rows="1" style="border-radius: 50px;"></textarea> <br>
                            <button type="submit" name="Validate">
                                <img src="https://th.bing.com/th/id/R.8e8fdf063a57ddaee73df8422076ddbe?rik=XjoR7rN1d8pgiA&riu=http%3a%2f%2fmenu.rlfans.com%2fimages%2fchatarrow.png&ehk=izPu3AS3fsmHCISfKfZYDTc8H3m%2fVvoC8nXHgI2ZZSI%3d&risl=&pid=ImgRaw&r=0"  border="none" width="40" height="40">
                                </img>
                            </button>  
                            
                        </div>
                    </div>       
                </form>
            </div>
                              <br>   <br> 
        </section>
    </div>
    
    <?php    }     ?>
    </div>      
  
</body>

<footer>
        <?php include('Includes/footer.php');
        ?>
</footer>
</html>