<?php 
include '../dbcon.php';

// Read incoming parameters from DataTables
$draw = isset($_POST['draw']) ? intval($_POST['draw']) : 0;
$start = isset($_POST['start']) ? intval($_POST['start']) : 0;
$length = isset($_POST['length']) ? intval($_POST['length']) : 10;
$orderColumnIndex = isset($_POST['order'][0]['column']) ? intval($_POST['order'][0]['column']) : 0;
$orderColumn = isset($_POST['columns'][$orderColumnIndex]['data']) ? $_POST['columns'][$orderColumnIndex]['data'] : 'post_id';
$orderDir = isset($_POST['order'][0]['dir']) && $_POST['order'][0]['dir'] === 'asc' ? 'ASC' : 'DESC';
$searchValue = isset($_POST['search']['value']) ? $_POST['search']['value'] : '';
$category_filter = isset($_POST['category_filter']) ? $_POST['category_filter'] : '';

// Base query
$sql = "SELECT * FROM `post` WHERE 1=1";

// Apply category filter
if (!empty($category_filter)) {
    $sql .= " AND `post_category` = '$category_filter'";
}

// Apply search filter
if (!empty($searchValue)) {
    $sql .= " AND (`post_title` LIKE '%$searchValue%' OR `post_content` LIKE '%$searchValue%')";
}

// Add order by and limit
$sql .= " ORDER BY `$orderColumn` $orderDir LIMIT $start, $length";

$result = $con->query($sql);

// Get total records without a separate query
$totalRecordsResult = $con->query("SELECT COUNT(*) as total FROM `post`");
$totalRecordsRow = $totalRecordsResult->fetch_assoc();
$totalRecords = $totalRecordsRow['total'];

// Data
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = [
        "post_date" => date("F d, Y (h : i a)"),
        "post_title" => $row['post_title'],
        "post_category" => $row['post_category'],
        "post_status" => $row['post_status'] ? 'Published' : 'Draft',
        "post_id" => $row['post_id']
    ];
}

// Response for DataTables
$response = [
    "draw" => $draw,
    "recordsTotal" => $totalRecords,
    "recordsFiltered" => $totalRecords, // Use the same total; adjust if using SQL_CALC_FOUND_ROWS
    "data" => $data
];

echo json_encode($response);

$con->close();
?>
