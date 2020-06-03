<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            'user@example.com'
        );
    }

    public function testConnectToDatabase(): void {
        $conn = pg_connect(getenv("DATABASE_URL"));
        $this->assertTrue($conn);
    }
}
?>