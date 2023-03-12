	<?php
		require('Action/Users/ShowUserProfile.php');
	?>
<!DOCTYPE html>
<html>
<head>
	<?php
			include('Includes/Head.php');
	?>
</head>
<body>

		<?php 
			if (isset($errorMsg)) {
						echo $errorMsg;

					}	

			if (isset($GetAllUserPosts)){

				?>
<div class="card" style="padding-left: 10px; background-color: whitesmoke; ">

	<a href="PhotoProfile.php?id=<?= $UserId;?>&pseudo=<?= $User_Pseudo;?>">
   <h2 style="font-family: tahoma; color: darkblue;"><img src="Action/Album/profile-picture-icon-1.jpg"
   alt="profile" width="75" height="70" class="rounded-circle">
 </a> 
   <?php echo $User_Pseudo; ?> </h2>

   			<h5 style="color: #784865; font-family:Lucida Calligrapgy;font-style: initial;">@<?= $UserInfo['Prenom'] . $UserInfo['Nom']; ?> </h5>
</div>
		<br>

		<br>
<?php
		 	}


		 	?>

	<div class="container">
		 	<?= '<p>'.$UserInfo['Prenom']. ' has recently published: '. '</p>' ;?>
		 	<?php
		 	while($UserPosts=$GetAllUserPosts->fetch()){


		 		?>


		 		<div class="card" style="width:fit-content;">

		 				<div class="card-header" style="border-bottom: 1px solid, black;">

		 				<h4 style="link-style:none;"> <a href=" Profil.php?id=<?=$UserInfo['id'];?> "><?= $UserPosts['pseudo_auteur']; ?></a></h4>	 
		 				 </div>

		 				 <div class="card-body">
		 				 	
		 				 	<p style="font-size: 20px; font-family: candara ; max-rows:4;">
		 				 		<?= $UserPosts['contenu']; ?>
		 				 	</p>

		 				 	<div class="card-img-bottom">
		 				 		

		 				 	</div>


		 				</div>


		 		<div class="card-footer" style="width:content;">

					 <a onclick="bascule('Commenter');"><img src="https://th.bing.com/th/id/OIP.hCiM1he-FgLsYVf6aMtv8gHaHa?pid=ImgDet&rs=1" alt="Comment" width="40" height="35"></img> </a>

                   <a href="ilike"><img src="https://th.bing.com/th/id/R.dc124679726a20dc2cad0aaefdfdb312?rik=%2fcH325%2bVj%2fww8A&pid=ImgRaw&r=0" alt="iLike" width="40" height="35"></img></a>
                   <a href="SharePostAction.php"><img src="https://th.bing.com/th/id/R.d6e5673556df5e6e52e47db05ce4fa4d?rik=pSjwa1F%2fF5eNIg&pid=ImgRaw&r=0" alt="Share" width="40" height="35"></img></a>
		 				 	
		 		</div>
	 
		</div>


<br>

<br>

</div>
<br>
<br>

            <div class="container" name="Commenter" id="Commenter" style="visibility: hidden; width:fit-content;display:inline;">
                
                <form class="form-group" method="POST"  >  
                   <div class="card-body">
                        <div class="mb-3" >

                            <textarea  name="Comment" class="form-control" cols="30" rows="1" style="border-radius: 50px;"> </textarea>
                            <br> <button class="btn btn-primary" type="submit" name="Validate">Comment</button>
                        
                        </div>
                    </div>
                </form>

            </div>



<br>

<br>
	 			<?php	
				}	
		 ?>


</body>
	
	<footer>
	<?php 
			include('Includes/footer.php');

	 ?>
	</footer>
</html>