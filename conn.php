<?php

function connection()
{
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "api_blogger";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    return $conn;
}
