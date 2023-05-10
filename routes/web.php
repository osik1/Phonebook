<?php

use App\Http\Controllers\ContactsController;
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
    return view('phonebook');
});

Route::get('phonebook', function () {
    return view('phonebook');
})->name('phonebook.page');

Route::get('add-contact', function () {
    return view('add-contacts');
})->name('add-contact');


Route::get('contacts', [ContactsController::class, 'index'])->name('search');
Route::post('save-contact', [ContactsController::class, 'store'])->name('store.contact');
Route::delete('del-contact/{id}', [ContactsController::class, 'destroy']);