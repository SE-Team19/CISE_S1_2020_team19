<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class ApproveRejectTestCase extends TestCase {
    
    function testApprove(): void {
        $conn = pg_connect("host=ec2-52-71-55-81.compute-1.amazonaws.com
                            dbname=d7n9b1n1v1sh20
                            port=5432
                            user=ujebccinfaqukt
                            password=5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08
                            sslmode=require");
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