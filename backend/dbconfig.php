<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fontanil_itsp1";


// $servername = "localhost";
// $username = "fontanil_test1";
// $password = "fUe_L2oHeq!x";
// $dbname = "fontanil_itsp1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>