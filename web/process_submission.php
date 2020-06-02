<?php
$conn = pg_connect(getenv("DATABASE_URL"));
$type = $_POST['type'];
$status;
if ($type == "moderator") {
    $status = 'pending review';
} else if ($type == "analyst") {
    $status = 'processing';
}
$sql = "SELECT * FROM articles
WHERE status = '$status'
LIMIT 1;"; // Select the first occuring row where status has pending review

$result = pg_query($sql); // Query the databse
$output = pg_fetch_assoc($result); // Return as associative array

echo json_encode($output);
?>