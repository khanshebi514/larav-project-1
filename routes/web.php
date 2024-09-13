<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;
use App\Models\Post;

//controller routes

Route::controller(JobController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/jobs', 'show');
    Route::post('/jobs', 'post');
    Route::patch('/jobs/{id}', 'update');
    Route::delete('/jobs/{id}', 'delete');
});

Route::get('register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);
Route::get('login',[SessionController::class, 'login']);
Route::post('login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);


Route::view('/about', 'about');

Route::get('/contact', function () {
    return view('contact');
});
Route::view('/jobs/create', 'jobs.create');
Route::get('/jobs/{job}', function (Jobs $job) {
    return view('jobs.show', ['job' => $job]);
});
Route::get('/jobs/{job}/edit', function (Jobs $job) {
    return view('jobs.edit', ['job' => $job]);
});


// Route::resource('jobs', JobController::class);


