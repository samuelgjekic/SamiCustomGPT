<?php
session_start();

// Clear the session
$_SESSION['All_Messages'] = null;
unset($_SESSION['All_Messages']);

// Check if the session has been cleared
if (!isset($_SESSION['All_Messages'])) {
    // Session cleared successfully
    $response = array("status" => "success");
} else {
    // Failed to clear session
    $response = array("status" => "error");
}

// Return the JSON response
echo json_encode($response);
