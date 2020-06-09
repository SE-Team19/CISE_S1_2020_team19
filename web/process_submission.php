<?php
$conn = pg_connect("host=ec2-52-71-55-81.compute-1.amazonaws.com
dbname=d7n9b1n1v1sh20
port=5432
user=ujebccinfaqukt
password=5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08
sslmode=require");
$type = $_POST['type']; // Moderator, analyst, or submitter
$submit = $_POST['submit']; // Can be title or JSON
$status = "";
// Approving
if ($type == "moderator-approve") {
    approve($submit, "pending review");
} else if ($type == "analyst-approve") {
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
    if ($result == false) {
        echo "<h3 style='color:red;'>Error approving submission: " + pg_last_error() + "</h3>";
    } else {
        echo "<h3 style='color:green;'>Successfully approved" + "</h3>";
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
        echo "<h3 style='color:red;'>Error rejected submission: " + pg_last_error() + "</h3>";
    } else {
        echo "<h3 style='color:green;'>Successfully rejected" + "</h3>";
    } 
}
// Submit details to the database
function submit($submit) {
    // Use JSON 
    $sql = "INSERT INTO articles (title, author, subject, date, description, status)
    VALUES ()";
}
// Get submission from database
function get($status) {
    $sql = "SELECT * FROM articles
    WHERE status = '$status'
    LIMIT 1;"; // Select the first occuring row where status has pending review
    $result = pg_query($sql); // Query the databse
    $output = pg_fetch_assoc($result); // Return as associative array
    
    echo json_encode($output);
}
?>