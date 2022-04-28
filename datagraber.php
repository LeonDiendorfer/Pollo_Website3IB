<?php
//DATAGRABER
//Leon Diendorfer
//10.03.2022
//Version 1.0
//Nimmt Daten aus dem Inputfelder und schreibt es mit nem SQL Statement in unsre MySql Datenbank

$servername = "localhost";
$username = "pollo";
$password = "admin1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anrede = $_POST["anrede"];
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $geburtsdatum = $_POST["geburtstag"];
    $email = $_POST["email"];
    $passwort = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $straße = $_POST["straße"];
    $wohnort = $_POST["wohnort"];
    $plz = $_POST["plz"];
    $bundesland = $_POST["bundesland"];
    $telnum = $_POST["telnum"];

    $sql = "INSERT INTO pollo.user (Vorname, Anrede, Nachname, Geburtsdatum, Mail, Passwort, Straße, Wohnort, PLZ, Bundesland, Telefonnummer)
VALUES (\"$vorname\", \"$anrede\", \"$nachname\", \"$geburtsdatum\", \"$email\", \"$passwort\", \"$straße\", \"$wohnort\", \"$plz\", \"$bundesland\", \"$telnum\")";

    echo $sql;

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $target_dir = "upload/";
    $target_file = $target_dir.basename($_FILES["Datei"]["name"]);
    move_uploaded_file($_FILES["Datei"]["tmp_name"], $target_file);

    header("Location: index.php");
    exit();

}

?>
