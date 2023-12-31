<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('anish', function () {
    return 'this is  a anish page';

});


Route::get('person/{id}', function (){

return "anish";
});

Route:: get('animals', function(){
    return 'dogs and cats';
})->name('animals');


Route:: group(['as'=> 'animals.', 'prefix' => 'animals'], function(){
    Route:: get('meat', function(){
        return 'chicken tanduri';
    })->name('meat');
    Route:: get('sexy-girl', function(){
        return 'hot girls';
    })->name('sexy');
    Route:: get('ganesh-puti', function(){
        return 'ganes ko jhat';
    })->name('ganeshthasni');
});


Route::get('about', [TestController::class, 'contact'])->name('about');


Route::resource('blog', BlogController::class);
