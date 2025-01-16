<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job as Jobs;



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

    $job = Jobs::find($id);

    return view('job', ['job' => $job ]);
});


Route::get('/contact', function () {
    return view('contact');
});
