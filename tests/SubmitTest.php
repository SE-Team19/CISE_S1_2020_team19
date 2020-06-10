<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once(dirname(dirname(__FILE__)) . "/src/submitprocess.php");
$conn = pg_connect("host=ec2-52-71-55-81.compute-1.amazonaws.com
                            dbname=d7n9b1n1v1sh20
                            port=5432
                            user=ujebccinfaqukt
                            password=5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08
                            sslmode=require");

final class SubmitTest extends TestCase
{
    function testSubmit() {
        $sql = "SELECT title FROM articles
                WHERE title = 'TEST'";
        submit("TEST","TEST","2020-12-12","TEST","TEST");
        $result = pg_query($sql);
        $this->assertGreaterThan(0, pg_num_rows($result), "Rows must be greater than 0");
        // Clean up
        $sql = "DELETE FROM articles WHERE title = 'TEST'";
        pg_query($sql);
    }
}
?>