<?php

$servername = "dudldorfer.mysql.database.azure.com";
$username = "dudldorfer";
$password = "Birkenweg6";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $passwort = $_POST["password"];

    $sql = "SELECT * FROM pollo.user WHERE Mail = '" . $email . "'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $passwortchecker = password_verify($passwort, $row["Passwort"]);

    var_dump(isset($_SESSION));
    if ($passwortchecker) {
        session_start();
        $_SESSION["firstName"] = $row["Vorname"];
        $_SESSION["lastName"] = $row["Nachname"];
        $_SESSION["birthDate"] = $row["Geburtsdatum"];

        var_dump($_SESSION["firstName"]);
        header("Location: ./dashboard.php");
    } else {
        header("Location: ./login.php");
    }
}
?>