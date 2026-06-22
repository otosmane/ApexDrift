<?php
/**
 * Tests for ApexDrift
 */

use PHPUnit\Framework\TestCase;
use Apexdrift\Apexdrift;

class ApexdriftTest extends TestCase {
    private Apexdrift $instance;

    protected function setUp(): void {
        $this->instance = new Apexdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apexdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
