<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Der Gerät</title>
    <link rel="stylesheet" href="design.css">

</head>
<body>
<div class="main">
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
    <div class="content">
        <br>
        <h>Lorem Ipsum</h>
        <br><br><br>
        <section>
            <article>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                labore et
                dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                Stet
                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
                amet,
                consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                no
                sea takimata sanctus est Lorem ipsum dolor sit amet.
            </article>
        </section>
    </div>
    <footer class="foot">
        <a href="#">About Us</a>
    </footer>
</div>
</body>
</html>