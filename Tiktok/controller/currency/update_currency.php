<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); 

include("../../auth/connect.php"); 

if (isset($_SESSION['userid']) && isset($_POST['currency'])) {
    $currency = $conn->real_escape_string($_POST['currency']);
    $userId = $_SESSION['userid']; 

    $sql = "UPDATE currency SET currency = '$currency' WHERE userid = $userId";

    if ($conn->query($sql) === TRUE) {
        echo "Currency updated successfully for user ID: $userId !";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    if (!isset($_SESSION['userid'])) {
        echo "User ID not found in session.";
    } else {
        echo "Currency not provided.";
    }
}

?>