<?php
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


<body class="body">



<br> <br>

<a href="PublishItems.php" class="btn btn-primary">Post</a>
 
<br> <br>
<div class="container" style="width: 17; align-items:center;"></div>

        <?php
        if(isset($successMsg)){
            echo '<p>' . $successMsg . '</p> ';
            }
        ?>

        <?php
            while($Poste=$getAllMyPosts->fetch()){
                ?>

                
                <div class="card-text" style="width:content;" >
                <div class="card-header">
                    <a href="Profile.php?id=<?php echo $Poste['id_auteur'];?>"><?php echo $Poste['pseudo_auteur'] ?> </a>
                </div>
                    <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <p class="card-link"> <?php echo $Poste['contenu'] ?> </p>
                    <a href="Articles.php?id=<?=$Poste['id'];?>" class="btn btn-light">Read more...</a>
                    <a href='EditPost.php?id=<?php echo $Poste['id']; ?>' class="btn btn-secondary" >Change</a>
                    <a href="#" class="btn btn-light" >Comment</a>
                    <a href="#ilike" class="btn btn-primary" >iLike</a>
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

</body>

            <br />
</html>