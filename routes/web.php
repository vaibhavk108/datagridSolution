<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyHeadController;
use App\Http\Controllers\FamilyMemberController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [FamilyHeadController::class, 'index'])->name('family.head.list');
Route::get('family/head/create', [FamilyHeadController::class, 'create'])->name('family.head.create');
Route::get('family/head/city/{id}', [FamilyHeadController::class, 'cityId'])->name('family.head.cityId');
Route::post('family/head/store', [FamilyHeadController::class, 'store'])->name('family.head.store');




Route::get('family/member/list/{id}', [FamilyMemberController::class, 'index'])->name('family.member.list');
Route::get('family/member/create/{id}', [FamilyMemberController::class, 'create'])->name('family.member.create');
Route::post('family/member/store', [FamilyMemberController::class, 'store'])->name('family.member.store');




