<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Jobs
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
}


Route::get('/', function () {
    return view('home', [
        'jobs' => Jobs::all()
        ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs'=> Jobs::all()
    ]);
});


Route::get('/jobs/{id}', function ($id) {

    $job = Arr::first(Jobs::all(), fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job ]);
});


Route::get('/contact', function () {
    return view('contact');
});
