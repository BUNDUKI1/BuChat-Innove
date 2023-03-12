<?php

require('Action/database.php');



if(isset($_POST['Validate'])){

    header ('Location: ../Profile.php');
}

    if(isset($_POST['Cancel'])){

        header ('Location: Profile.php');


}