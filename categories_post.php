<?php

include('conn.php');

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //input
    $name = $_POST["name"];
    $description = $_POST["description"];

    //sql
    $sql = "INSERT INTO categories (name, description) VALUES ('$name', '$description')";
    $query = mysqli_query(connection(), $sql);

    //response
    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['data'] = $_POST;

    $data = json_encode($response);
    echo $data;
}
