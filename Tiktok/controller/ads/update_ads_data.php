<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include("../../auth/connect.php");

if (isset($_POST['edit'])) {

    $adsid = $conn->real_escape_string($_POST['adsid']);
    $onoff = isset($_POST['onoff']) ? 1 : 0;
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

    // $rowId = str_replace("ads-rw-", "", $conn->real_escape_string($_POST['id']));

    // ----------------------Handle file upload------------------
    $videoname = $conn->real_escape_string($_POST['adsname']);;
    if (isset($_FILES['videoname'])) {
        $file_error = $_FILES['videoname']['error'];

        if ($file_error === UPLOAD_ERR_OK) {
            // No error, proceed with the upload
            $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/work (DB)/img/";
            $videoname = basename($_FILES['videoname']['name']);
            $target_file = $target_dir . $videoname;

            if (!move_uploaded_file($_FILES['videoname']['tmp_name'], $target_file)) {
                die("Error: There was an error moving the uploaded file.");
            }
        } else {
            // Handle the specific error
            switch ($file_error) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    die("Error: File size is too large.");
                    break;
                case UPLOAD_ERR_PARTIAL:
                    die("Error: File was only partially uploaded.");
                    break;
                case UPLOAD_ERR_NO_FILE:
                    die("Error: No file was uploaded.");
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    die("Error: Missing a temporary folder.");
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    die("Error: Failed to write file to disk.");
                    break;
                case UPLOAD_ERR_EXTENSION:
                    die("Error: A PHP extension stopped the file upload.");
                    break;
                default:
                    die("Error: Unknown upload error.");
                    break;
            }
        }
    } else {
        die("Error: No file uploaded.");
    }

    $sql = "UPDATE adsdata SET adsid = '$adsid', onoff = '$onoff', videoname = '$videoname', adsname = '$adsname', domainname = '$domainname', status = '$status', adsgroupid = '$adsgroupid', adsgroupname = '$adsgroupname', result = '$results', imprs = '$imprs', reach = '$reach', cost = '$cost', click = '$clicks' WHERE adsid = '$adsid'";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "New ad data updated with ID: $adsid"]);
        header('Location: ../../index.php');
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "User ID not found in session or form not submitted properly."]);
}
