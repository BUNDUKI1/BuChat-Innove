<?php 
	require('Action/database.php');
	require('Action/Users/Security.php');

	if (isset($_GET['id']) AND !empty($_GET['id'])) {

		$UserId=$_GET['id'];

		$checkIfUserExist=$bdd->prepare('SELECT * FROM users WHERE id=?');
		$checkIfUserExist->execute(array($UserId));

		if ($checkIfUserExist->rowCount()>0 ) {
			$UserInfo= $checkIfUserExist->fetch();

			$User_Pseudo=$UserInfo['Pseudo'];
			$User_Firstname=$UserInfo['Prenom'];

			$User_Name=$UserInfo['Nom'];
			$UserPhone=$UserInfo['Phone'];


			$GetAllUserPosts=$bdd->prepare('SELECT * FROM publications WHERE id_auteur=?');
			$GetAllUserPosts->execute(array($UserId));
			


		} else{

			$errorMsg="Pas d'infos";

		}

	}else{
		$errorMsg="No User found";
	}
 ?>