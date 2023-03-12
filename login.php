<?php require('Action/Users/LoginAction.php');?>
<!DOCTYPE html>
<html lang="en">
<head>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
            
            <script language="Javascript">
                function bascule(elem)
                    {
                // Quel est l'état actuel ?
                    etat=document.getElementById(elem).style.visibility;
                        if(etat=="hidden"){document.getElementById(elem).style.visibility="visible";}
                        else{document.getElementById(elem).style.visibility="hidden";}
                    }
            </script>
</head>



<body class="container" style="border-radius:3rem; background-color: whitesmoke;">
            <div class="container"style="padding-top: 10px;">
                <div class="card-header" style="color: darkgreen; text-align: center;position: justify; border-bottom: 2px solid;"> <h1>BuChat</h1>
                </div>
            </div>
                            <br>
    <form class="container" style="width:400px; background-color: white; border-radius: 20px; animation-fill-mode: auto; fill: auto;" method="POST" >
            <div class="card-header" style="color: darkblue; text-align: center;position: justify; border-bottom: 0.9px solid;">
                <h3>Login</h3>
            </div>
                <br>
            <?php
                if(isset($errorMsg)){
                echo '<p style="color:red; text-align:center; position:justify;">' . $errorMsg .  '<br>'.
               ' </p>';
                    

                   }
            ?>

                <div class="form-group" style="padding-top:20px">
                    <label for="exampleInputEmail1" >Nom d'utilisateur</label>
                    <input type="text" class="form-control" name="Pseudo" autocomplete="true">
                </div>

                <div class="form-group" >
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="Password">
                </div>

                <div style="border-bottom:2px solid;">
                    <label for="exampleInputEmail1"></label>
                </div>
                <br>
        <div class="container" style="display:inline-flex; align-items: center; flex-direction: column;">
   
            <button type="submit" class="btn btn-primary" name="Validate" style="width:content;">Connection</button>
            <br>
            <?php

            if (isset($bascule)) {   ?>
                       
            <a class="btn btn-danger" name="Forgotten" onclick="bascule('Forgotten')" style="visibility:visible; color:white; position: relative; hover:"> 
                        <?= $bascule  ;?> 
            </a>
               
               <?php } ?>

            <a href="RecupPassword.php" name="Forgotten" id="Forgotten" style="visibility:hidden;"> Password forgotten?
            </a>

            <a href="signup.php" class="btn btn-success" name="Signup">I don't have any acount! I signup
            </a> 
    
                <style> 

                    button:hover {
                        border-radius: 20px;
                        box-shadow: burlywood ;
                        background-color: green;

                        }
                    a { 
                        background-color: none; 
                        color:darkblue;
                     
                        }
                    a:hover{
                        color: floralwhite; 
                        background-color: black; 
                        border-radius: 20PX;
                      }
                </style>
                            <br>
        </div>
    
    </form>
</body>
    <br>
<footer>
        <?php 
            include('Includes/footer.php');
         ?>
</footer>
</html>