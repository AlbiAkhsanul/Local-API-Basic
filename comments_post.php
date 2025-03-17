<?php

include('conn.php');

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //input
    $user_id = $_POST["user_id"];
    $post_id = $_POST["post_id"];
    $body = $_POST["body"];

    //sql
    $sql = "INSERT INTO comments (user_id, post_id, body) VALUES ('$user_id', '$post_id', '$body')";
    $query = mysqli_query(connection(), $sql);

    //response
    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['data'] = $_POST;

    $data = json_encode($response);
    echo $data;
}
