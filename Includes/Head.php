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
//affiche les likes sur la page

var counterVal = 0;

function incrementClick() {
    updateDisplay(++counterVal);
}

function resetCounter() {
    counterVal = 0;
    updateDisplay(counterVal);
}

function updateDisplay(val) {
    document.getElementById("ilike-div").innerHTML = val;
}
</script>

        <link rel="shortcut icon" href="./Album/BuChat.ico" type="icon">
        <title> Bu Chat</title>


        <link rel="stylesheet" href="./Assets/Styles.css">
        

    <div class="nav" style="position: sticky;">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title" style="font-family:Bookman OldStyle; color: darkblue; text-decoration: revert-layer; text-decoration-color: cadetblue;">
            BuChat
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>

          </label>
        </div>
        
        <div class="nav-links">
            <ul>
          <li><a href="Accueil.php" >Home</a></li>
          <li><a href="MyPost.php" >My Posts</a></li>
          <li><a href="Notification.php" >Notifications</a></li>
          <li><a href="Chat.php" >Messenger</a></li>
          <li><a href="Amis.php" >Friends</a></li>
          <li><a href="Profile.php" >My account</a></li>
   
          <li>
          <div>
            <form >
                <div class="form-group row" >
                    <div class="col-8">
                        <input type="search" name="search" class="form-control">
                    </div>

                    <div class="col-4">
                        <button class="btn btn-success">Reseach</button>
                    </div>

                </div>
            </form>
          </div>
      </li>
      <li>
          <a class="nav-item nav-link" href="Action/Users/Logout.php">Logout</a>
      </li>
            </ul>
        </div>
      </div>
      </head>
<body>
