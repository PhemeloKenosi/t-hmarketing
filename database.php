<?php

$host = "localhost"; //because we are using a localhost server
$dbname = "hannaecommerce"; //the name of the database
$username = "root";
$password = "";

//To link the database and the form (Database) togther
$mysqli = new mysqli(hostname:$host,
                     username: $username,
                     password: $password,
                     database: $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;