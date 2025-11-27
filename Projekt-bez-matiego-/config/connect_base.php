<?php 
    $host = 'localhost';
    $db_name = 'manageGym';
    $password = '';
    $user_name = 'root';

    $conn = new mysqli($host, $user_name, $password, $db_name);

    if ($conn->connect_error) {
        http_response_code(500);
        die(json_encode([
            "error" => "DB connection failed",
            "details" => $conn->connect_error
        ]));
    }

    $conn->set_charset("utf8mb4");
?>