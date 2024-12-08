<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['edit'])) {

    $campaignid = $conn->real_escape_string($_POST['campaignid']);
    $onoff = isset($_POST['onoff']) ? 1 : 0;
    $campaignname = $conn->real_escape_string($_POST['campaignname']);
    $status = $conn->real_escape_string($_POST['delivery']);

    $sql = "UPDATE campaigndata SET campaignid = '$campaignid', onoff = '$onoff', campaignname = '$campaignname', status = '$status' WHERE campaignid = $campaignid";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "New campaign data updated with ID: $rowId"]);
        header('Location: ../../index.php');
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "User ID not found in session or form not submitted properly."]);
}
