<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

// Read JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['startdate']) && isset($data['enddate'])) {
    // Escape the input for security
    $startDate = $conn->real_escape_string($data['startdate']);
    $endDate = $conn->real_escape_string($data['enddate']);
    $userId = $_SESSION['userid'];

    // Validate date format (optional, recommended)
    if (!strtotime($startDate) || !strtotime($endDate)) {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid date format.'
        ]);
        exit;
    }

    // Update the database
    $dateSql = "UPDATE daterange SET startdate = '$startDate', enddate = '$endDate' WHERE userid = $userId";

    if ($conn->query($dateSql) === TRUE) {
        echo json_encode([
            'success' => true,
            'message' => 'Start and end dates updated successfully.'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Error updating start and end dates: ' . $conn->error
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Start date or end date not provided.'
    ]);
}

$conn->close();

?>