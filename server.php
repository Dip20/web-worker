<?php
header('Content-Type: application/json');

// Read the raw input data
$inputData = file_get_contents("php://input");

// Decode the JSON data
$data = json_decode($inputData, true);

if ($data !== null) {
    // Access the data
    $start_date = $data['start_date'];

    // Process the data or perform any other necessary actions
    $response = [
        "st" => "success",
        "msg" => "hello world",
        "data" => $start_date
    ];

    // Send the response as JSON
    // sleep(60);
    echo json_encode($response);
} 
