<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

session_start();

include("../../auth/connect.php");

if (isset($_POST['user'])) {
    $user = $conn->real_escape_string($_POST['user']);

    // ---------------------------------- Update Username ---------------------------------
    $sql = "UPDATE ad_user SET username = '$user' WHERE id = '" . $_SESSION['userid'] . "'";

    if ($conn->query($sql) === TRUE) {

        // --------------------------- Update default currency (MYR) ----------------------
        $currencySql = "UPDATE currency SET currency = 'MYR' WHERE userid = '" . $_SESSION['userid'] . "'";

        // ----------------------------- Update date range ------------------------
        $dateSql = "UPDATE daterange SET startdate = NOW(), enddate = NOW() WHERE userid = '" . $_SESSION['userid'] . "'";

        // -------------------------------- Output JSON -------------------------------
        if ($conn->query($currencySql) === TRUE && $conn->query($dateSql) === TRUE) {
            echo json_encode([
                "message" => "Currency, start and end date updated successfully",
                "userid" => $_SESSION['userid'],
                "currency" => "MYR",
                "startdate" => date('Y-m-d H:i:s'),
                "enddate" => date('Y-m-d H:i:s')
            ]);
        } else if ($conn->query($currencySql) === FALSE) {
            echo json_encode(["error" => "Error updating currency: " . $conn->error]);
        } else {
            echo json_encode(["error" => "Error updating date: " . $conn->error]);
        }
    } else {
        echo json_encode(["error" => "Error updating user: " . $conn->error]);
    }
}

?>