<?php
/**
 * Tests for TokenRonto
 */

use PHPUnit\Framework\TestCase;
use Tokenronto\Tokenronto;

class TokenrontoTest extends TestCase {
    private Tokenronto $instance;

    protected function setUp(): void {
        $this->instance = new Tokenronto(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokenronto::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
