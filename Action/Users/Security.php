<?php

session_start();
    if(isset($_SESSION['auth'])){

        
    
    }else{
        header('Location: login.php');

    }