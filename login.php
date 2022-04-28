<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Los Pollos Hermanos</title>
    <link rel="stylesheet" href="design.css">

<body>
<div class="login">
    <div class="welcome">
        <div class="logo"><img class="logoimg" src="images/MicrosoftTeams-image (2).png"></img></div>
        <h>LOS HERMANOS</h>
    </div>
    <div class="liste">
        <nav class="navi">
            <ul>
                <li>
                    <a class="shop" href="index.php">Shop</a>
                    <a class="sale" href="login.php">Login</a>
                    <a class="register" href="register.php">Register</a>
                    <?php if(isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])) echo '<a class="profil" href="dashboard.php">Profil</a>' ?>
                </li>
            </ul>
        </nav>
    </div>
    <form action="login_validater.php" method="post" enctype="multipart/form-data">
        <div class="logincontent">
            <div class="loginfelder">
                <h id="loginheader"> Login</h>
                <div id="email">
                    <input type="email" id="mail_login" name="email" placeholder="E-Mail">
                </div>

                <div id="passwort">
                    <input type="password" id="pw_plogin" name="password" required
                           pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" placeholder="Passwort">
                </div>

                <div class="button_login"> <input type="submit" id="submit_login"/>
            </div>
        </div>
    </form>
</div>
</body>