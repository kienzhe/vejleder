<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>

    <link rel="stylesheet" href="index.css">
    
</head>

<body>
    <div id="login_box">
        <h2>LogIn</h2>

        <div class="box_grid">
            <input type="email" name="email" id="email" placeholder="UCL Email">

            <div class="box_grid2">
                <input type="password" name="password" id="password" placeholder="Password">
                <button id="button_login"><a href="registration-1.php">LogIn</a></button>
            </div>
    
            <div class="box_grid3">
                <input type="checkbox" name="remember_me" id="remember_me">
                <p class="huskmig">Husk mig</p>
            </div>
        </div>
    </div>
</body>
</html>