<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "0000";
$db_name = "bibliotheque";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connexion error" . mysqli_connect_error());
}