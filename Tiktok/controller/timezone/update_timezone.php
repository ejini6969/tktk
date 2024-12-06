<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); 

include("../../auth/connect.php"); 

if (isset($_POST['timezone'])) {
    $timezone = $conn->real_escape_string($_POST['timezone']);
    $userId = $_SESSION['userid'];  
    
    $tzSql = "UPDATE timezone SET timezone = '$timezone' WHERE userid = $userId";

    if ($conn->query($tzSql) === TRUE) {
        echo "Timezone updated successfully";
    } else {
        echo "error => Error updating timezone: " . $conn->error;
    }
} else {
    echo "error => Timezone not provided.";
}

?>