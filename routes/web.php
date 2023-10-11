<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LandingController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', LandingController::class)->name('landing');

// Route::get('/template', function() {
//     return view('layouts.template');
// });

Route::get('/books', [BookController::class, 'index'])->name('book.index');

Route::post('/books', [BookController::class, 'store'])->name('book-store');

Route::resource('books', BookController::class);

// Route::get('/books.show/{book:isbn}', function (Book $book) {
//     return $book;
// });

// Route::get('/books.update/{book:isbn}', function (BookController $book) {
//     return $book;
// });

Route::resource('books', BookController::class)->parameters([
    'books' => 'isbn',
]);

// Route::resource('books', LandingController::class)->parameters([
//     'books' => 'isbn',
// ]);


// Route::get('/book', [BookController::class, 'create']);
