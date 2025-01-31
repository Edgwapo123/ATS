<?php
include '../dbcon.php';

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Pagination and filter parameters from DataTables
$limit = isset($_GET['length']) ? intval($_GET['length']) : 10;
$offset = isset($_GET['start']) ? intval($_GET['start']) : 0;
$search = isset($_GET['search']['value']) ? $_GET['search']['value'] : '';
$batch_year = isset($_GET['batch_year']) ? $_GET['batch_year'] : ''; // Batch filter

// Constructing the SQL WHERE clause
$whereClauses = [];
$whereClauses[] = "`user_status` = 1";
$whereClauses[] = "`user_access` = 1";

if (!empty($search)) {
    $whereClauses[] = "(fname LIKE '%$search%' OR lname LIKE '%$search%' OR current_emp LIKE '%$search%')";
}

if (!empty($batch_year)) {
    $whereClauses[] = "batch_year = '$batch_year'";
}

$whereSQL = implode(' AND ', $whereClauses);

// Count total records for pagination
$count_sql = "SELECT COUNT(*) AS total FROM users WHERE $whereSQL";
$count_result = $con->query($count_sql);
$total_rows = $count_result->fetch_assoc()['total'];

// Fetch the users data with filters and pagination
$sql = "SELECT batch_year, fname, mname, lname, contact, address, gender,current_emp,mar_status FROM users WHERE $whereSQL LIMIT $limit OFFSET $offset";
$result = $con->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Return data in DataTables format
echo json_encode([
    "draw" => isset($_GET['draw']) ? intval($_GET['draw']) : 0,
    "recordsTotal" => $total_rows,
    "recordsFiltered" => $total_rows,
    "data" => $data
]);

$con->close();
?>
