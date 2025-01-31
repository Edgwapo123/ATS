<?php
include '../dbcon.php';

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Pagination parameters
$limit = 5; // Entries per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$search = isset($_GET['search']) ? $_GET['search'] : '';
$offset = ($page - 1) * $limit;

// Count total records (fixed query)
$count_sql = "SELECT COUNT(*) AS total FROM users WHERE `user_status`=0 AND `user_access` = 1 AND (fname LIKE '%$search%' OR lname LIKE '%$search%' OR current_emp LIKE '%$search%')";
$count_result = $con->query($count_sql);
$total_rows = $count_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $limit);

// Fetch users with pagination and search (fixed query)
$sql = "SELECT * FROM users WHERE `user_status`=0 AND `user_access` = 1 AND (fname LIKE '%$search%' OR lname LIKE '%$search%' OR current_emp LIKE '%$search%') LIMIT $limit OFFSET $offset";
$result = $con->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return the users and pagination details
echo json_encode([
    'users' => $data,
    'total_pages' => $total_pages,
    'current_page' => $page
]);

$con->close();
?>
