<?php
/**
 * Tests for HeadlessUI
 */

use PHPUnit\Framework\TestCase;
use Headlessui\Headlessui;

class HeadlessuiTest extends TestCase {
    private Headlessui $instance;

    protected function setUp(): void {
        $this->instance = new Headlessui(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Headlessui::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
