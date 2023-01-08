<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



//Route::view('/portfolio', 'portfolio', array('portfolio' => $portfolio))->name('portfolio');

//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::get('/portfolio',  [PortfolioController::class, 'index'])->name('portfolio');

//Route::resource('projects', PortfolioController::class)->only('index', 'show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [MessageController::class, 'store'])->name('contact');

Route::get('test/{nombre?}', function ($nombre = 'Invitado') {
	return view('test', ["nombre" => $nombre]);
})->name('test');;

/*
Route::get('/', function () {
    echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
});

Route::get('saludo/{nombre?}', function ($nombre = 'Invitado') {
    return "Hola " . $nombre . " desde la pagina de contacto.";
});


Route::get('contactanos', function () {
    return "Seccion de contactos";
})->name('contactos');

*/
