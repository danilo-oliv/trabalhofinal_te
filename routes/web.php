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
Route::post('/adicionar', [AnimalController::class, 'storeAnimal'])->name('animal.store');

Route::get('/editar/{id}', [AnimalController::class, 'edit'])->name('animal.edit');
Route::put('/editar/{id}', [AnimalController::class, 'save'])->name('animal.save');



Route::delete('/deletar/{id}', [AnimalController::class, 'delete'])->name('animal.delete');
