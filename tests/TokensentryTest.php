<?php
/**
 * Tests for TokenSentry
 */

use PHPUnit\Framework\TestCase;
use Tokensentry\Tokensentry;

class TokensentryTest extends TestCase {
    private Tokensentry $instance;

    protected function setUp(): void {
        $this->instance = new Tokensentry(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokensentry::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
