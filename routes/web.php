<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\AdminController;
use App\http\Controllers\Cousre;
use App\Http\Controllers\StripeController;



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
//     return view('welcome');
// });
  
// check if user is a admin 
route::get('/CheckRoute',[HomeController::class,'CheckRoute']);
        


//   admin routes

route::get('/AdminHome',[AdminController::class,'index']);


route::get('/student',[AdminController::class,'student']);

route::get('/teacher',[AdminController::class,'teacher']);



route::get('/deleted/{id}',[AdminController::class,'delete']);



route::get('/course',[AdminController::class,'course']);

route::post('/uploadcourse',[AdminController::class,'uploadcourse']);

route::get('/editcourse/{id}',[AdminController::class,'editcourse']);

route::post('/edit/{id}',[AdminController::class,'edit']);


route::get('/deletecourse/{id}',[AdminController::class,'deletecourse']);




// user routes
route::get('/',[HomeController::class,'index']);


//Course routes

route::get('/course/{id}',[Cousre::class,'payment']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// route::get('products.purchase', $datas->id,[Cousre::class,'show']);

Route::post('products/{id}/purchase',[Cousre::class,'purchase'])->name('products.purchase');