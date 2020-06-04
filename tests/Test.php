<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class SEERUnitTests extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            'user@example.com'
        );
    }
    // Test if it can connect to PostgreSQL
    public function testConnectToDatabase(): void {
        $conn = pg_connect("host=ec2-52-71-55-81.compute-1.amazonaws.com
                            dbname=d7n9b1n1v1sh20
                            port=5432
                            user=ujebccinfaqukt
                            password=5bc5f1199e72b3a45bcd320fad11fcd5464ac989651150d10681d498fa65ff08
                            sslmode=require");
        $this->assertNotFalse($conn);
    }
    // Test if it can select data from the database.
    public function testSelectDataFromDB(): void {
        $sql = "SELECT * FROM articles";
        $result = pg_query($sql);
        $this->assertNotFalse($result);
    }
}
?>