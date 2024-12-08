<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['edit'])) {

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

    // Extract the row ID
    // $rowId = str_replace("ads-group-rw-", "", $conn->real_escape_string($_POST['id']));

    // Update the `adsgroupdata` table
    $sql = "UPDATE adsgroupdata 
            SET 
                adsgroupid = '$adsgroupid',
                onoff = '$onoff', 
                adsgroupname = '$adsgroupname', 
                status = '$status', 
                campaignid = '$campaignid', 
                result = '$results', 
                imprs = '$imprs', 
                reach = '$reach', 
                cost = '$cost', 
                click = '$clicks'
            WHERE adsgroupid = '$adsgroupid'";

    if ($conn->query($sql) === TRUE) {
        // Success response
        echo json_encode(["status" => "success", "message" => "Ad group data updated successfully with ID: $rowId"]);
        header('Location: ../../index.php');
        exit();
    } else {
        // Error response
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error]);
    }
} else {
    // Form not submitted properly or session error
    echo json_encode(["status" => "error", "message" => "User ID not found in session or form not submitted properly."]);
}

?>
