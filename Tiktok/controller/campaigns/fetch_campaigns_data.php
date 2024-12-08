<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['rowId'])) {
    $rowId = str_replace("campaigns-rw-", "", $conn->real_escape_string($_POST['rowId']));

    $sql = "SELECT * FROM campaigndata WHERE campaignid = $rowId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo json_encode(["status" => "error", "message" => "No data found"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "No rowId provided"]);
}

?>