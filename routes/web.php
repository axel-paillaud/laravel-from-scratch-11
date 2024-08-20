<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use Illuminate\Http\Client\Request;

Route::view("/", "home");

Route::get("/about", function () {
    return view("about");
});

Route::controller(JobController::class)->group(function () {
    Route::get("jobs", "index");
    Route::get("jobs/create", "create");
    Route::get("/jobs/{job}", "show");
    Route::post("/jobs", "store");
    Route::get("/jobs/{job}/edit", "edit");
    Route::patch("/jobs/{job}", "update");
    Route::delete("/jobs/{job}", "destroy");
});

Route::view("/contact", "contact");
