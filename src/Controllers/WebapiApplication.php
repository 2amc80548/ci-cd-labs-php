<?php
namespace App;

class HelloController {
    public function hello(): string {
        return "Hello CI/CD World!";
    }
}

class HealthController {
    public function health(): string {
        return "Server Healthy!";
    }
}

class DateController {
    public function date(): string {
        return "Current Server Date: " . date('Y-m-d');
    }
}