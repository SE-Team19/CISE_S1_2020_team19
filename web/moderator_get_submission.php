<?php
$conn = pg_connect(getenv("DATABASE_URL"));

$sql = "SELECT * FROM articles
WHERE status = 'pending review'
LIMIT 1;"; // Select the first occuring row where status has pending review

$result = pg_query($sql); // Query the databse
$output = pg_fetch_assoc($result); // Return as associative array

echo json_encode($output);
?>