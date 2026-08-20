<?php
namespace App\Tests;

use App\HelloController;
use App\HealthController;
use App\DateController;
use PHPUnit\Framework\TestCase;

class WebapiApplicationTest extends TestCase {

    public function testCheckRootResponse(): void {
        $controller = new HelloController();
        $this->assertEquals("Hello CI/CD World!", $controller->hello());
    }

    public function testCheckHealthyResponse(): void {
        $controller = new HealthController();
        $this->assertEquals("Server Healthy!", $controller->health());
    }

    public function testCheckDateResponse(): void {
        $controller = new DateController();
        $expectedDate = "Current Server Date: " . date('Y-m-d');
        $this->assertEquals($expectedDate, $controller->date());
    }
}