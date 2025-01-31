<?php
include '../dbcon.php';

$response = [];

// Check if the file was uploaded without errors
if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $filename = basename($_FILES['file']['name']);
    $type = $_POST['type']; 
    $location = '../uploads/' . $filename; // Server-side path
    $location1 = 'uploads/' . $filename;   // Publicly accessible path

    // Ensure the uploads directory exists and is writable
    if (!is_dir('../uploads')) {
        mkdir('../uploads', 0777, true); // Create the directory if it doesn't exist
    }

    // Move the uploaded file to the desired location
    if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
        // Adjust the location path if necessary and include the type in the response
        $response = [
            'location' => str_replace('..', '', $location1),
            'type' => $type
        ];
    } else {
        $response = ['error' => 'File upload failed'];
    }
} else {
    $response = ['error' => 'No file uploaded or upload error occurred'];
}

// Send JSON response
header('Content-Type: application/json'); // Set content type to application/json
echo json_encode($response);

// Log the response for debugging
error_log('Upload response: ' . json_encode($response));
?>
