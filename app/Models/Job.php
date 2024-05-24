<?php

namespace App\Models;

class Job {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'name' => 'Director',
                'salary' => '50,000',
            ],
            [
                'id' => 2,
                'name' => 'Programmer',
                'salary' => '100,000',
            ],
            [
                'id' => 3,
                'name' => 'Teacher',
                'salary' => '40,000',
            ],
        ];

    }
}
