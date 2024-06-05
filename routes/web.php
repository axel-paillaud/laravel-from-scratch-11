<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greetings' => 'World',
    ]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function() {
    $jobs = Job::with('employer')->get();

    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/job/{id}', function($id) {

    $job = Job::find($id);

    return view('job', [
        'job' => $job,
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});

