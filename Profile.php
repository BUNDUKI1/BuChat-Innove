
<?php
require('Action/Public/SearchResultAction.php');
require('Action/Users/Security.php');
require('Action/Public/MyPostAction.php');



?>
<!DOCTYPE html>
<html lang="en">

<?php
include('Includes/Head.php');
?>



<?php
    include('Includes/Navbar.php');
    ?>
<br> </br>

<a href="InsererPhoto.php?id=<?php echo $_SESSION['id'] ?>">
   <h2>  <img src="Action/Album/profile-picture-icon-1.jpg"
   alt="profile" width="75" height="70" class="rounded-circle" >
 </a> 
   <?php echo $_SESSION['Pseudo'] ?> </h2>


<br> <br>







<a href="PublishItems.php" class="btn btn-primary">Publier</a>

<br> <br>
 
<?php
            while($Poste=$getAllMyPosts->fetch()){
?>
    <div class="container" style="width: 17; align-items:center;"></div>

        <?php
        
        if(isset($errorMsg)){
           
            echo '<p>' . $errorMsg . '</p> ';
          ?>

     

                
                <div class="card-text" style="width:fit-content;position:end; overflow: hidden;" >
                <div class="card-header">
                    <a href="Profile.php?id=<?php echo $Poste['id_auteur'];?>"><?php echo $Poste['pseudo_auteur'] ?> </a>
                </div>
                    <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"> <?php echo $Poste['contenu'] ?> </p>
                    <a href="#" class="btn btn-light">Read more...</a>
                    <a href='EditPost.php?id=<?php echo $Poste['id']; ?>' class="btn btn-secondary" >Change</a>
                    <a href="#" class="btn btn-light" >Comment</a>
                    <a href="#ilike" class="btn btn-primary" >Like</a>
                </div>
                <div class="card-footer" > 
                    <p class="card-text"> <?php echo $Poste['date_post'] ?> </p> 
                </div>
               

                </div>
        </div>
                    
                <br> <br>
                <?php 


            } 
            

                ?>
</div>

 <?php
            }
        ?>

</body>

            <br />
</html>