<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\MasakanController; 
use App\Http\Controllers\OrderController;


 
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
// Route::get('/', function () { 
//    return view('welcome'); 
// }); 
 
 
 
Route::controller(AuthController::class)->group(function() { 
    // register form 
    Route::get('/register', 'register')->name('auth.register'); 
    // store register 
    Route::post('/register', 'store')->name('auth.store'); 
    // login form 
    Route::get('/login', 'login')->name('auth.login'); 
    // auth proses 
    Route::post('/auth', 'auth')->name('auth.authentication'); 
    // logout 
    Route::post('/logout', 'logout')->name('auth.logout'); 
    // dashboard page 
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::resource('/masakan', MasakanController::class);
Route::resource('/order', OrderController::class);
