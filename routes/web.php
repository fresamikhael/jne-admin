<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermitController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('permit', [PermitController::class, 'index'])->name('permit-index');
Route::get('permit/edit', [PermitController::class, 'edit'])->name('permit-edit');
Route::get('permit/delete', [PermitController::class, 'destroy'])->name('permit-delete');
Route::get('permit/check/{id}', [PermitController::class, 'legalCheck'])->name('permit-check');
Route::post('permit/check/{id}', [PermitController::class, 'legalUpdate'])->name('permit-update');

Route::get('headDept', [PermitController::class, 'indexDept'])->name('headDept-index');
Route::get('headDept/check/{id}', [PermitController::class, 'headDeptCheck'])->name('headDept-check');
Route::post('headDept/check/{id}', [PermitController::class, 'headDeptApprove'])->name('headDept-approve');

Route::get('inpg', [PermitController::class, 'indexInpg'])->name('inpg-index');
Route::get('inpg/check/{id}', [PermitController::class, 'inpgCheck'])->name('inpg-check');
Route::post('inpg/check/{id}', [PermitController::class, 'inpgUpdate'])->name('inpg-update');
Route::get('inpg/finish/{id}', [PermitController::class, 'inpgFinish'])->name('inpg-finish');
Route::post('inpg/finish/{id}', [PermitController::class, 'inpgPost'])->name('inpg-post');

Route::get('close', [PermitController::class, 'indexClose'])->name('close-index');

Route::get('login', [AuthController::class, 'login'])->name('login');
