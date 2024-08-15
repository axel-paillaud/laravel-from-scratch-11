<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Http\Client\Request;

Route::get("/", function () {
    return view("home", [
        "greetings" => "World",
    ]);
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/jobs", function () {
    $jobs = Job::with("employer")->latest()->cursorPaginate(3);

    return view("jobs.index", [
        "jobs" => $jobs,
    ]);
});

Route::get("/jobs/create", function () {
    return view("jobs.create");
});

Route::get("/job/{id}", function ($id) {
    $job = Job::find($id);

    return view("jobs.show", [
        "job" => $job,
    ]);
});

Route::post("/jobs", function () {
    request()->validate([
        "title" => ["required", "min:3"],
        "salary" => ["required"],
    ]);

    Job::create([
        "title" => request("title"),
        "salary" => request("salary"),
        "employer_id" => 1,
    ]);

    return redirect("/jobs");
});

Route::get("/contact", function () {
    return view("contact");
});
