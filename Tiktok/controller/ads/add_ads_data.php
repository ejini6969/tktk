<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['create'])) {

    $adsid = $conn->real_escape_string($_POST['adsid']);
    $onoff = isset($_POST['onoff']) ? 1 : 0;
    $videoname = $conn->real_escape_string($_POST['videoname']);
    $adsname = $conn->real_escape_string($_POST['adsname']);
    $domainname = $conn->real_escape_string($_POST['domainname']);
    $status = $conn->real_escape_string($_POST['delivery']);
    $adsgroupid = $conn->real_escape_string($_POST['adsgroupid']);
    $adsgroupname = $conn->real_escape_string($_POST['adsgroupname']);
    $results = (int)$_POST['results']; 
    $imprs = (int)$_POST['imprs'];
    $reach = (int)$_POST['reach'];
    $cost = (float)$_POST['cost']; 
    $clicks = (int)$_POST['clicks'];

    $sqlSelectDate = "SELECT * FROM daterange WHERE userid = {$_SESSION['userid']}";
    $dateResult = $conn->query($sqlSelectDate);
    $dateRow = $dateResult->fetch_assoc();
    $date = date('Y-m-d', strtotime($dateRow['enddate']));

    $sql = "INSERT INTO adsdata (adsid, onoff, videoname, adsname, domainname, status, adsgroupid, adsgroupname, result, imprs, reach, cost, click, date)
            VALUES ('$adsid', $onoff, '$videoname', '$adsname', '$domainname', '$status', '$adsgroupid', '$adsgroupname', $results, $imprs, $reach, $cost, $clicks, '$date')";
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
