<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['create'])) {

    $adsgroupid = $conn->real_escape_string($_POST['adsgroupid']);
    $onoff = isset($_POST['onoff']) ? 1 : 0;
    $adsgroupname = $conn->real_escape_string($_POST['adsgroupname']);
    $status = $conn->real_escape_string($_POST['delivery']);
    $campaignid = $conn->real_escape_string($_POST['campaignid']);
    $results = (int)$_POST['results']; 
    $imprs = (int)$_POST['imprs'];
    $reach = (int)$_POST['reach'];
    $cost = (float)$_POST['cost']; 
    $clicks = (int)$_POST['clicks'];

    $sqlSelectDate = "SELECT * FROM daterange WHERE userid = {$_SESSION['userid']}";
    $dateResult = $conn->query($sqlSelectDate);
    $dateRow = $dateResult->fetch_assoc();
    $date = date('Y-m-d', strtotime($dateRow['enddate']));

    $sql = "INSERT INTO adsgroupdata (adsgroupid, onoff, adsgroupname, status, campaignid, result, imprs, reach, cost, click, date)
            VALUES ('$adsgroupid', $onoff, '$adsgroupname', '$status', '$campaignid', $results, $imprs, $reach, $cost, $clicks, '$date')";
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
