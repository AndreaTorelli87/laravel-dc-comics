<?php
   use Illuminate\Support\Facades\Route;
   use App\Http\Controllers\Guest\PageController;
   use App\Http\Controllers\Guest\ComicsController;

   Route::get("/", [ComicsController::class,"home"])->name("home");
   Route::resource("comics", ComicsController::class);

