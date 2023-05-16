<?php
   use Illuminate\Support\Facades\Route;
   use App\Http\Controllers\Guest\PageController;

   Route::get("/", [PageController::class,"home"])->name("home");
   // Route::get("/create", [PageController::class,"create"])->name("create");
   // Route::get("/index", [PageController::class,"index"])->name("index");
   // Route::get("/show", [PageController::class,"show"])->name("show");
