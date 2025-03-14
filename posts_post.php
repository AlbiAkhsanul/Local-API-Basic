<?php

include('conn.php');

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //input
    $user_id = $_POST["user_id"];
    $category_id = $_POST["category_id"];
    $title = $_POST["title"];
    $body = $_POST["body"];

    //sql
    $sql = "INSERT INTO posts (user_id, category_id, title, body) VALUES ('$user_id', '$category_id', '$title', '$body')";
    $query = mysqli_query(connection(), $sql);

    //response
    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['data'] = $_POST;

    $data = json_encode($response);
    echo $data;
}
