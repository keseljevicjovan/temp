<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Public
Route::get('/', function () {
    return redirect('home');
});

// Private
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/movies', [MovieController::class, 'index'])->name('home');
    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movie');
    Route::get('/action', [MovieController::class, 'action'])->name('action');


    Route::get('/contact', [ContactController::class, 'show'])->name('contact');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


    Route::post('/movies/{movie}/rate', [RatingController::class, 'store'])->name('movies.rate');
    Route::post('/movies/{movie}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

    Route::get('/filter', [MovieController::class, 'filter'])->name('movies.filter');

    // Route::resource('profile', ProfileController::class)->only([

    //     'update',
    //     'destroy'
    // ])->parameters(['profile' => 'user']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile/reviews-ratings', [ProfileController::class, 'reviewsAndRatings'])->name('profile.reviews-ratings');

    Route::get('movies/{id}/watch', 'App\Http\Controllers\MovieController@watch')->name('movies.watch');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
    Route::delete('/ratings/{rating}', [RatingController::class, 'destroy'])->name('ratings.destroy');

});

require __DIR__ . '/auth.php';
