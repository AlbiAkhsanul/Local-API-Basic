<?php

include('conn.php');

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    //input
    parse_str(file_get_contents('php://input'), $_PUT);

    $username = $_PUT["username"];
    $email = $_PUT["email"];
    $password = $_PUT["password"];
    $id = $_GET["id"];

    //sql
    $sql = "UPDATE users SET username='$username', email='$email', password='$password' WHERE id=$id";
    $query = mysqli_query(connection(), $sql);

    // //response
    // if ($query) {
    //     // Periksa apakah ada baris yang terpengaruh
    //     $affected_rows = mysqli_affected_rows(connection());
    //     if ($affected_rows > 0) {
    //         $response['status']['success'] = true;
    //         $response['status']['code'] = 200;
    //         $response['data'] = $_PUT;
    //     } else {
    //         // Tidak ada baris yang diperbarui (id mungkin tidak ditemukan)
    //         $response['status']['success'] = false;
    //         $response['status']['code'] = 404;
    //         $response['message'] = "ID tidak ditemukan atau data tidak berubah.";
    //     }
    // } else {
    //     // Query gagal dijalankan
    //     $response['status']['success'] = false;
    //     $response['status']['code'] = 500;
    //     $response['message'] = "Kesalahan saat menjalankan query.";
    // }

    //response
    $response['status']['success'] = true;
    $response['status']['code'] = 200;
    $response['data'] = $_PUT;

    $data = json_encode($response);
    echo $data;
}
