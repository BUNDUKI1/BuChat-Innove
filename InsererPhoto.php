<?php
require('Action/Users/Security.php');
require('Action/Users/InsererPhotoAction.php');


include('Includes/Head.php');

include('Includes/navbar.php');
?>

<div class="container">
    <form class="container">

        <div class="card" style="width:15rem;">
            <div class="form-group">
                    <label for="Input"></label>
                    <input type="file" class="form-control">
            </div>
                <br><br>
                <div class="card-body" style="Width:400; padding:0;">
                <button type="submit" class="btn btn-success" name="Validate">Save</button>
                <button type="submit" class="btn btn-danger" name="Cancel">Cancel</button>
                </div>
            </div>
        </div>   
    </form>
</div>