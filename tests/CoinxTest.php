<?php
/**
 * Tests for CoinX
 */

use PHPUnit\Framework\TestCase;
use Coinx\Coinx;

class CoinxTest extends TestCase {
    private Coinx $instance;

    protected function setUp(): void {
        $this->instance = new Coinx(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinx::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
