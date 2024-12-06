<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("../../auth/connect.php"); 

if (isset($_POST['rowId'])) {
    $rowId = str_replace("ads-rw-", "", $conn->real_escape_string($_POST['rowId']));

    $deleteSql = "DELETE FROM adsdata WHERE id = $rowId";

    if ($conn->query($deleteSql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Ad row deleted successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error deleting ad row: " . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "rowId not provided."]);
}

?>
