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

// Index
Route::get("/jobs", function () {
    $jobs = Job::with("employer")->latest()->cursorPaginate(3);

    return view("jobs.index", [
        "jobs" => $jobs,
    ]);
});

// Create
Route::get("/jobs/create", function () {
    return view("jobs.create");
});

// Show
Route::get("/jobs/{job}", function (Job $job) {
    // Without Route Model Binding :
    // $job = Job::find($id);

    return view("jobs.show", [
        "job" => $job,
    ]);
});

// Store
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

// Edit
Route::get("/jobs/{job}/edit", function (Job $job) {
    // $job = Job::find($id);

    return view("jobs.edit", [
        "job" => $job,
    ]);
});

// Update
Route::patch("/jobs/{job}", function (Job $job) {
    // authorize (On hold ...)
    //
    request()->validate([
        "title" => ["required", "min:3"],
        "salary" => ["required"],
    ]);


    // findOrFail, instead of find, to handle inexisting id
    // $job = Job::findOrFail($id);

    // One way to do it
    // $job->title = request("title");
    // $job->salary = request("salary");
    // $job->save();

    // Another way to do it, similar to create method
    $job->update([
        "title" => request("title"),
        "salary" => request("salary"),
    ]);

    return redirect("/jobs/" . $job->id);
});

// Destroy
Route::delete("/jobs/{job}", function (Job $job) {
    // authorize (On hold ...)

    // Job::findOrFail($id)->delete();
    $job->delete();

    return redirect("/jobs");
});

Route::get("/contact", function () {
    return view("contact");
});
