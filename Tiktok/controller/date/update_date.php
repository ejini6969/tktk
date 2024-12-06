<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); 

include("../../auth/connect.php"); 

if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
    $startDate = $conn->real_escape_string($_POST['start_date']);
    $endDate = $conn->real_escape_string($_POST['end_date']);
    $userId = $_SESSION['userid'];  
    
    $dateSql = "UPDATE daterange SET startdate = '$startDate', enddate = '$endDate' WHERE userid = $userId";

    if ($conn->query($dateSql) === TRUE) {
        echo "Start and end dates updated successfully";
    } else {
        echo "error => Error updating start and end dates: " . $conn->error;
    }
} else {
    echo "error => Start date or end date not provided.";
}

?>