<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use Illuminate\Http\Client\Request;

Route::get("/", function () {
    return view("home", [
        "greetings" => "World",
    ]);
});

Route::get("/about", function () {
    return view("about");
});

Route::get("jobs", [JobController::class, "index"]);
Route::get("jobs/create", [JobController::class, "create"]);
Route::get("/jobs/{job}", [JobController::class, "show"]);
Route::post("/jobs", [JobController::class, "store"]);
Route::get("/jobs/{job}/edit", [JobController::class, "edit"]);
Route::patch("/jobs/{job}", [JobController::class, "update"]);
Route::delete("/jobs/{job}", [JobController::class, "destroy"]);

Route::get("/contact", function () {
    return view("contact");
});
