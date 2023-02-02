<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AvanceController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\PlantelController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/usuarios', [PersonalController::class, 'index'])->middleware(['auth', 'verified','role_direccion'])->name('personal');
Route::get('/usuarios/create', [PersonalController::class, 'create'])->middleware(['auth', 'verified','role_direccion'])->name('personal.create');
Route::get('/usuarios/{user}/edit', [PersonalController::class, 'edit'])->middleware(['auth', 'verified','role_direccion'])->name('personal.edit');
Route::get('/usuarios/{user}/editpass', [PersonalController::class, 'editPass'])->middleware(['auth', 'verified','role_direccion'])->name('personal.editpass');

Route::get('/planteles', [PlantelController::class, 'index'])->middleware(['auth', 'verified','role_direccion'])->name('plantels');
Route::get('/planteles/{plantel}/edit', [PlantelController::class, 'edit'])->middleware(['auth', 'verified','role_direccion'])->name('plantels.edit');

/*
Route::get('/actividades', [ImportController::class, 'index'])->middleware(['auth', 'verified'])->name('importar');
Route::get('/actividades/import', [ImportController::class, 'create'])->middleware(['auth', 'verified'])->name('importar.archivo');
Route::post('/actividades/store', [ImportController::class, 'store'])->middleware(['auth', 'verified'])->name('importar.store');
*/

Route::get('/actividades', [ActivityController::class, 'index'])->middleware(['auth', 'verified'])->name('actividades');
Route::get('/actividades/import', [ActivityController::class, 'create'])->middleware(['auth', 'verified'])->name('actividades.import');
Route::post('/actividades/store', [ActivityController::class, 'store'])->middleware(['auth', 'verified'])->name('actividades.store');
Route::get('/actividades/{activity}/edit', [ActivityController::class, 'edit'])->middleware(['auth', 'verified'])->name('actividades.edit');
Route::get('/actividades/{actividad}/reprogramar_actividad', [ActivityController::class, 'repactivity'])->middleware(['auth', 'verified'])->name('actividades.repactivity');
Route::resource('/avance', AvanceController::class);
Route::resource('/avances', ProgramaController::class);

Route::resource('/archivo', ArchivoController::class);

//Route::resource('/dashboards', ProgramaController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
