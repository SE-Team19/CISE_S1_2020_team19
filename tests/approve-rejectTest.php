<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class ApproveRejectTestCase extends TestCase {
    
    function testApprove(): void {
        $conn = pg_connect(getenv("DATABASE_URL"));
        $sql = "INSERT INTO articles (title, status)
                VALUES ('TEST', 'pending review')";
        pg_query($sql);

        $sql = "UPDATE articles
                SET status = 'processing'
                WHERE title = 'TEST'";
        pg_query($sql);

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