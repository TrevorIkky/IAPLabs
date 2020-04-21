<?php
require_once "php/User.php";
$user = new User;
if (isset($_POST['action'])) {
    if ($user->addUser($_POST["f"], $_POST["l"], $_POST["c"])) {
        echo ("User Added!");
    } else {
        echo ("Unable to add user!");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Wk</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/add.css">
</head>

<body>

    <div class="main-container">
        <div class="size-box-400">
            <div class="row">
                <form class="col s12" action="add.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="f" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="l" id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="c" id="city" type="text" class="validate">
                            <label for="city">City</label>
                        </div>
                    </div>

                    <div class="center-align">
                        <button class="btn waves-effect waves-light blue darken-1" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<!--JavaScript at end of body for optimized loading-->
<script defer type="text/javascript" src="js/materialize.min.js"></script>

</html>