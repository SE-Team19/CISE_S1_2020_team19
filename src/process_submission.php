<?php
// If POST request is recieved then initialize variables
if (isset($_POST['type']) || isset($_POST['submit'])) {
    $conn = pg_connect(getenv("DATABASE_URL"));
    $type = $_POST['type']; // Moderator, analyst, or submitter
    $submit = $_POST['submit']; // Can be title or JSON
    $status = "";
    // Approving
    if ($type == "pending review") {
        approve($submit, "pending review");
    } else if ($type == "processing") {
        approve($submit, "processing");
    // Retrieving
    } else if ($type == "moderator-get") {
        get("pending review");
    } else if ($type == "analyst-get") {
        get("processing");
    } 
    // Submitting
    else if ($type == "submitter") {
        submit($submit);
    } else if ($type == "reject") {
        // Rejecting
        reject($submit);
    }
}

/**
 * Approve submission based on status
 */
function approve($submit, $status) {
    // Goes from pending review to processing from the moderator
    if ($status == "pending review") {
        $status = "processing";
    } else if ($status == "processing") {
        // Goes to approved from the analyst
        $status = "approved";
    }
    // Just need the title to update status row
    $sql = "UPDATE articles
            SET status = '$status'
            WHERE title ILIKE '$submit'";
    $result = pg_query($sql);
    if ($result == false && pg_num_rows($result) <= 0) {
        echo "<h3 style='color:red;'>Error approving submission: " . pg_last_error() . "</h3>";
    } else {
        echo "<h3 style='color:green;'>Successfully approved" . "</h3>";
    }
    
}
/**
 * Rejects a submission and sets their status to rejected
 */
function reject($submit) {
    $sql = "UPDATE articles
            SET status = 'rejected'
            WHERE title ILIKE '$submit'";
    $result = pg_query($sql);
    if ($result == false) {
        echo "<h3 style='color:red;'>Error rejected submission: " . pg_last_error() . "</h3>";
    } else {
        echo "<h3 style='color:green;'>Successfully rejected" . "</h3>";
    } 
}
// Get submission from database
function get($status) {
    $sql = "SELECT * FROM articles
    WHERE status = '$status'
    LIMIT 1;"; // Select the first occuring row where status has pending review
    $result = pg_query($sql); // Query the databse
    $output = pg_fetch_assoc($result); // Return as associative array
    
    echo json_encode($output);
    return $output;
}
?>