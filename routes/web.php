<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CadastroController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastrar', function () {
    return view('cadastrar-cliente');
})->middleware(['auth', 'verified'])->name('cadastrar');

Route::get('/listar', function () {
    return view('listar-cliente');
})->middleware(['auth', 'verified'])->name('listar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cadastrar', [CadastroController::class, 'create'])->middleware(['auth'])->name('cliente.registrar');
Route::post('/cadastrar', [CadastroController::class, 'store'])->middleware(['auth'])->name('cliente.guarda');

Route::get('/listar', [CadastroController::class, 'list'])->middleware(['auth'])->name('cliente.listar');

Route::get('/editar/{cadastro}', [CadastroController::class, 'edit'])->middleware(['auth'])->name('cliente.edita');
Route::patch('/editar/{cadastro}', [CadastroController::class, 'update'])->middleware(['auth'])->name('cliente.update');

Route::delete('/delete/{cadastro}', [CadastroController::class, 'destroy'])->middleware(['auth'])->name('cliente.deletar');

require __DIR__.'/auth.php';
