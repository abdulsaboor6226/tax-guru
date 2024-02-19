<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::view('dashboard' ,'backend.dashboard')->name('dashboard');
Route::view('ntn-registration' ,'backend.income-tax.ntn-registration')->name('ntn-registration');
Route::view('income' ,'backend.income-tax.income')->name('income');
Route::view('tax-credit' ,'backend.income-tax.tax-credit')->name('tax-credit');
Route::view('tax-deducted' ,'backend.income-tax.tax-deducted')->name('tax-deducted');
Route::view('wealth-statement' ,'backend.income-tax.wealth-statement')->name('wealth-statement');
Route::view('expense' ,'backend.income-tax.expense')->name('expense');
Route::view('wrap-up' ,'backend.income-tax.wrap-up')->name('wrap-up');
Route::view('fbr' ,'backend.income-tax.fbr')->name('fbr');
Route::view('payment' ,'backend.income-tax.payment')->name('payment');
