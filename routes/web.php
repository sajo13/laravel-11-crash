<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50,0000'
            ],
            [
                'title' => 'programmer',
                'salary' => '$30,0000'
            ],
            [
                'title' => 'Tester',
                'salary' => '$20,0000'
            ]
        ]
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
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
        ]
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $jobs = [
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

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job ]);
});


Route::get('/contact', function () {
    return view('contact');
});
