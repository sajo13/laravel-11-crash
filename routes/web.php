<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job as Jobs;



Route::get('/', function () {

//    dd( Jobs::all());
    return view('home', [
        'jobs' => Jobs::all()
        ]);
});

Route::get('/jobs', function () {


    return view('jobs.index', [
        'jobs'=> Jobs::with('employer')->latest()->simplepaginate(3)
    ]);
});

Route::get('/jobs/create', function () {

    return view('jobs.create');
});

Route::post('/jobs', function () {
    // validation...
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Jobs::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


Route::get('/jobs/{id}', function ($id) {

    $job = Jobs::find($id);

    return view('jobs.show', ['job' => $job ]);
});


Route::get('/contact', function () {
    return view('contact');
});
