<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['create'])) {

    $onoff = isset($_POST['onoff']) ? 1 : 0;
    $videoname = $conn->real_escape_string($_POST['videoname']);
    $adsname = $conn->real_escape_string($_POST['adsname']);
    $status = $conn->real_escape_string($_POST['delivery']);
    $adsgroupname = $conn->real_escape_string($_POST['adsgroupname']);
    $results = (int)$_POST['results']; 
    $imprs = (int)$_POST['imprs'];
    $reach = (int)$_POST['reach'];
    $cost = (float)$_POST['cost']; 
    $clicks = (int)$_POST['clicks'];

    $sql = "INSERT INTO adsdata (onoff, videoname, adsname, status, adgroupname, result, imprs, reach, cost, click)
            VALUES ($onoff, '$videoname', '$adsname', '$status', '$adsgroupname', $results, $imprs, $reach, $cost, $clicks)";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'New ad data added successfully!']);
        exit();
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Form not submitted properly']);
}

?>
