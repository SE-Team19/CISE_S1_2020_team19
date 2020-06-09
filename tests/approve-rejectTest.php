<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

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

final class ApproveRejectTestCase extends TestCase {
    
    function testApprove(): void {
        $conn = pg_connect("host=ec2-52-71-55-81.compute-1.amazonaws.com
                            dbname=d7n9b1n1v1sh20
                            port=5432
                            user=ujebccinfaqukt
                            password=5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08
                            sslmode=require");
        $sql = "INSERT INTO articles (title, author, status)
                VALUES ('TEST', 'TEST', 'pending review')";
        pg_query($sql);

        $sql = "UPDATE articles
                SET status = 'pending review'
                WHERE title = 'TEST'";
        pg_query($sql);

        approve("TEST", "pending review");

        $sql = "SELECT status from articles
                WHERE title = 'TEST'";
        $result = pg_query($sql);
        $actual = pg_fetch_assoc($result);


        $this->assertEquals("processing", $actual['status']);

        // Clean up
        $sql = "DELETE FROM articles
                WHERE title = 'TEST'";
        pg_query($sql);
    }
}

?>