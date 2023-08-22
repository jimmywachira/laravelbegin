<?php

use App\Http\Controllers\Profile\AvatorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*Web Routes;
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function (){
      return view('welcome');
});


Route::get('/customers' , [CustomerController::class , 'index']);
Route::get('/customers/create' ,  [CustomerController::class , 'create']);
Route::post('/customers' ,  [CustomerController::class , 'store']);
Route::get('/customers/{customerId}' ,  [CustomerController::class , 'show']);

Route::view('/layout',"layout");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/avator', [AvatorController::class , 'update'])->name('profile.avator');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';