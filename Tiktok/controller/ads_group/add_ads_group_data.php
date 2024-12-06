<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['create'])) {

    $onoff = isset($_POST['onoff']) ? 1 : 0;
    $adsgroupname = $conn->real_escape_string($_POST['adsgroupname']);
    $status = $conn->real_escape_string($_POST['delivery']);
    $adsgroupid = $conn->real_escape_string($_POST['adsgroupid']);
    $results = (int)$_POST['results']; 
    $imprs = (int)$_POST['imprs'];
    $reach = (int)$_POST['reach'];
    $cost = (float)$_POST['cost']; 
    $clicks = (int)$_POST['clicks'];

    $sql = "INSERT INTO adsgroupdata (onoff, adsgroupname, status, adsgroupid, result, imprs, reach, cost, click)
            VALUES ($onoff, '$adsgroupname', '$status', '$adsgroupid', $results, $imprs, $reach, $cost, $clicks)";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'New ad group data added successfully!']);
        exit();
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Form not submitted properly']);
}

?>
