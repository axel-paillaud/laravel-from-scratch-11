<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greetings' => 'Hello',
    ]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs/{id}', function($id) {

    $jobs = [
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

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    dd($job);

    return view('job', [
        'job' => $job,
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});

