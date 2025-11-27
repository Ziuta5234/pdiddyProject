<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

require_once 'connect_base.php';

$sql = "SELECT * FROM karnety";
$result = $conn->query($sql);

if (!$result) {
    http_response_code(500);
    echo json_encode([
        "error" => true,
        "message" => "Masz kura błąd stary",
        "details" => $conn->error
    ]);
    exit;
}

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>