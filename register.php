<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Los Pollos Hermanos</title>
    <link rel="stylesheet" href="design.css">
</head>

<body>
</div>
<div class="pollo">
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
    <div class="pollo-innerein">
        <form action="datagraber.php" method="post" enctype="multipart/form-data">
            <div id="form">
                <div id="boxshadow">
                    <h1>
                        Unterstüzen Sie Juan
                    </h1>

                    <div id="anredeherr">
                        <input type="radio" id="inputanrede" name="anrede" value="Herr" checked>
                        <label for="inputanrede">Herr</label>

                        <input type="radio" id="inputanrede2" name="anrede" value="Frau">
                        <label for="inputanrede2">Frau</label><br>
                    </div>

                    <div id="vorname">
                        <input type="text" id="inputvorname" name="vorname" placeholder="Vorname" required>
                    </div>

                    <div id="name">
                        <input type="text" id="inputname" name="nachname" placeholder="Nachname" required>
                    </div>

                    <div id="geb">
                        <input type="date" id="inputgeb" name="geburtstag">
                    </div>

                    <div id="email">
                        <input type="email" id="inputmail" name="email" placeholder="E-Mail">
                    </div>

                    <div id="passwort">
                        <input type="password" id="inputpw" name="password" required
                               pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" placeholder="Passwort">
                    </div>

                    <br>

                    <div>
                        <input type="text" id="inputstraße" name="straße" placeholder="Straße"/>
                    </div>
                    <div>
                        <input type="text" id="inputwohnort" name="wohnort" placeholder="Wohnort"/>
                    </div>
                    <div>
                        <input type="number" id="inputplz" name="plz" placeholder="PLZ" pattern= "\d{4}"\>
                    </div>
                    <select name="bundesland" id="bundesland">
                        <option value="Vorarlberg">Vorarlberg</option>
                        <option value="Tirol">Tirol</option>
                        <option value="Salzburg">Salzburg</option>
                        <option value="Kärnten">Kärnten</option>
                        <option value="Steiermark">Steiermark</option>
                        <option value="Oberösterreich">Oberösterreich</option>
                        <option value="Niederösterreich">Niederösterreich</option>
                        <option value="Burgenland">Burgenland</option>
                        <option value="Wien">Wien</option>
                    </select>
                    <div>
                        <input type="number" id="inputnumber" name="telnum" placeholder="Telefonnummer"/>
                    </div>
                    <div>
                        <p id="nosignup">Already have an account? <a href="login.php" id="loginhere">Login here</a></p>
                    </div>
                    <br>

                    <fieldset>
                        <p>
                            Datei hochladen:
                            <input name="Datei" type="file" size="50" maxlength="100000" accept="text/*">
                        </p>
                    </fieldset>

                    <div class="buttons">
                        <input type="submit" id="submit"/>
                        <button type="button"
                                onClick="show()" id="donate">
                            Donate
                        </button>

                        <button id="exit" type="button"
                                onClick="hide()" style="display:none">
                            X
                        </button>
                    </div>

                    <img id="image" src=
                            "images/MicrosoftTeams-image (2).png"
                         alt="GFG image" style="display: none"/>
                </div>
            </div>

            <article></article>
        </form>
    </div>

</div>
<script>
    function show() {

        /* Access image by id and change
        the display property to block*/
        document.getElementById('image')
            .style.display = "block";

        document.getElementById('donate')
            .style.display = "none";

        document.getElementById('exit')
            .style.display = "block";

    }

    function hide() {

        /* Access image by id and change
        the display property to block*/
        document.getElementById('image')
            .style.display = "none";

        document.getElementById('donate')
            .style.display = "block";

        document.getElementById('exit')
            .style.display = "none";
    }


</script>
</body>
</html>