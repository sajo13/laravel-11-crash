<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,0000'
            ],
            [
                'id' => 2,
                'title' => 'programmer',
                'salary' => '$30,0000'
            ],
            [
                'id' => 3,
                'title' => 'Tester',
                'salary' => '$20,0000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(! $job) {
            abort(404);
        }
        return $job;
    }
}