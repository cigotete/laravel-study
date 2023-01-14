<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::resource('portfolio', 'App\Http\Controllers\ProjectController', ['parameters' => [
    'portfolio' => 'project'
], 'names' => 'projects'
]);
/* // Comented because was replaced by a Resource.
Route::get('/portfolio',  [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/create',  [ProjectController::class, 'create'])->name('projects.create');
Route::get('/portfolio/{project}/edit',  [ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portfolio/{project}',  [ProjectController::class, 'update'])->name('projects.update');
Route::post('/portfolio',  [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portfolio/{project}',  [ProjectController::class, 'show'])->name('projects.show');
Route::delete('/portfolio/{project}',  [ProjectController::class, 'destroy'])->name('projects.destroy');
*/

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
