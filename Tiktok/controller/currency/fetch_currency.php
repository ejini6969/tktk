<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

session_start();

include("../../auth/connect.php");

if (isset($_SESSION['userid'])) {
    $userId = $_SESSION['userid'];
    $currencySql = "SELECT currency FROM currency WHERE userid = $userId";
    $result = $conn->query($currencySql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode(['currency' => $row['currency']]);
    } else {
        echo json_encode(['currency' => null]);
    }
} else {
    echo json_encode(['currency' => null]);
}

?>