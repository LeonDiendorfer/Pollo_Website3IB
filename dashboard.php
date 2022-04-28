<?php
Session_start();
if (!(isset($_SESSION["firstName"]) || isset($_SESSION["lastName"]))) {
    header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bagdads Backwaren</title>
    <link rel="stylesheet" href="design.css">

<body>
<div class="logged_in">
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
                    <a class="profil" href="dashboard.php">Profil</a>
                </li>
            </ul>
        </nav>
    </div>
    <form>
        <div class="logged_in_content">
            <h id="loginheader"> Logged In</h>
            <div>
                <h1> Willkommen <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></h1>
            </div>
            <div>
                <a class="logout" href="logout.php">Logout</a>
            </div>
        </div>
    </form>
</div>
</body>