<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'showAll'])->name('items.showAll');

Route::get('/adicionar', [AnimalController::class, 'create']);
Route::post('/adicionar', [AnimalController::class, 'store'])->name('form.store');

Route::get('/editar', [AnimalController::class, 'update']);
Route::put('/editar', [AnimalController::class, 'save'])->name('form.save');

Route::delete('/deletar/{id}', [AnimalController::class, 'delete'])->name('animal.delete');
