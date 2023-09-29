<?php

use App\Http\Controllers\ProfileController;
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

//MAIN
Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, '__invoke'])->name('main.index');
});
//PORTFOLIO
Route::group(['namespace' => 'Portfolio','prefix' => 'portfolio'], function () {
    Route::get('/', [\App\Http\Controllers\Main\ShowController::class, '__invoke'])->name('main.show');
});


//BLOG
Route::group(['namespace' => 'Blog','prefix' => 'blog'], function () {

    Route::get('/', [\App\Http\Controllers\Blog\IndexController::class, '__invoke'])->name('blog.index');
    Route::get('/post', [\App\Http\Controllers\Blog\ShowController::class, '__invoke'])->name('blog.show');

});

//ABOUT
Route::group(['namespace' => 'About','prefix' => 'about'], function () {
    Route::get('/', [\App\Http\Controllers\About\IndexController::class, '__invoke'])->name('about.index');
});

//CONTACT
Route::group(['namespace' => 'Contact','prefix' => 'contact'], function () {
    Route::get('/', [\App\Http\Controllers\Contact\IndexController::class, '__invoke'])->name('contact.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


