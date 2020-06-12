<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class DatabaseTest extends TestCase
{
    // Dummy test to see if unit testing works
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
    // Test if it can Insert the data
    public function testInsertDataInDB(): void {
        $sql = "INSERT INTO articles (title, author, doi, date, description, status)
                VALUES ('test', 'test', 'test', '2020-12-12', 'test', 'test')";
        $result = pg_query($sql);
        $this->assertNotFalse($result);
        // Remove test row
        $sql = "DELETE FROM articles WHERE title = 'test'";
        pg_query($sql);
    }
}
?>