<?php require('Action/Users/SignUpAction.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
            </script>

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
        <div class="container"style="padding-top: 8px;">

            <div class="card-header" style="color: darkgreen; text-align: center;position: justify; border-bottom: 2px solid; ">
                <h1>BuChat</h1>
            </div>
        </div>
                <br>

    <form class="container" style="width:max-content; background-color: white; border-radius: 20px;" method="POST">

             <div class="card-header" style="color: darkblue; text-align: center;position: justify; border-bottom: 0.9px solid;">
                    <h3>Signup</h3>
             </div>
                <br>

                    <?php
                        if(isset($errorMsg)){
                        echo '<p style="color:red;">' . $errorMsg . '</p>';
                        }
                    ?>


            <div class="form-group">
                <label for="exampleInputEmail1">Mail adress</label>
                <input type="email" class="form-control" name="Email"placeholder="ibminnove@gmail.com">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nom d'utilisateur</label>
                <input type="text" class="form-control" name="Pseudo" >
                <small class="form-text text-muted">Ce nom sera votre nom d'utilisateur. Il sera visible par tous vos contacts</small>    
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" class="form-control" name="FirstName">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" name="Name">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="Password">
            </div>
          
            <div style="border-bottom:2px solid;">
                    <label for="exampleInputEmail1">  </label>
            </div>
                    <br>
        <div class="container" style="display:inline-flex; align-items: center; flex-direction: column;">
            <button type="submit" class="btn btn-primary" name="Validate">S'inscrire</button>
            <br>
            <a class="btn btn-secondary" href="login.php">I've just registered! I Login</a>

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

        </div>
                            <br> <br>
    </form>

</body>

<footer>
    <?php
    include('Includes/footer.php');
    ?>
</footer>
</html>