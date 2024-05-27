<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {
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

    public static function find(int $id)
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
