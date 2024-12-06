<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['edit'])) {

    $onoff = isset($_POST['onoff']) ? 1 : 0;
    $adsgroupname = $conn->real_escape_string($_POST['adsgroupname']);
    $status = $conn->real_escape_string($_POST['delivery']);
    $adsgroupid = $conn->real_escape_string($_POST['adsgroupid']);
    $results = (int)$_POST['results'];
    $imprs = (int)$_POST['imprs'];
    $reach = (int)$_POST['reach'];
    $cost = (float)$_POST['cost'];
    $clicks = (int)$_POST['clicks'];

    $rowId = str_replace("ads-group-rw-", "", $conn->real_escape_string($_POST['id']));

    $sql = "UPDATE adsgroupdata SET onoff = '$onoff', adsgroupname = '$adsgroupname', status = '$status', adsgroupid = '$adsgroupid', result = '$results', imprs = '$imprs', reach = '$reach', cost = '$cost', click = '$clicks' WHERE id = $rowId";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "New ad group data updated with ID: $rowId"]);
        header('Location: ../../index.php');
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "User ID not found in session or form not submitted properly."]);
}