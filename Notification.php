<?php 
require ('Action/database.php');
require ('Action/Users/Security.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'Includes/Head.php';?>

<body>




<?php include 'Includes/Navbar.php';?>
    <br><br>

    <?php $successMsg= ('Vous etes connecte'); ?>
    <?php
        if(isset($successMsg)){
        echo '<p>' . $successMsg . '</p>';
        }
        
    ?>



<?php include 'Includes/footer.php';?>