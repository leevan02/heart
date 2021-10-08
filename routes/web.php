<?php


use App\Http\Controllers\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SaveController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
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
        


// //   admin routes

route::get('/adminHome',[AdminController::class,'index']);


route::get('/student',[AdminController::class,'student']);

route::get('/teacher',[AdminController::class,'teacher']);



route::get('/deleted/{id}',[AdminController::class,'delete']);


route::get('/course',[AdminController::class,'course']);

route::get('/addcourse',[AdminController::class,'addcourse']);

route::post('/uploadcourse',[AdminController::class,'uploadcourse']);

route::get('/editcourse/{id}',[AdminController::class,'editcourse']);

route::post('/edit/{id}',[AdminController::class,'edit']);


route::get('/deletecourse/{id}',[AdminController::class,'deletecourse']);



route::get('/applicant',[AdminController::class,'applicant']);

route::get('/approve_applicant',[AdminController::class,'approve_applicant']);

route::post('/approved_applicant/{id}',[AdminController::class,'approved_applicant']);

route::get('/delete_applicant/{id}',[AdminController::class,'delete_applicant']);


// user routes
route::get('/',[HomeController::class,'index']);


//SAVE routes

route::post('/save',[SaveController::class,'save']);

route::get('/showsave',[SaveController::class,'showsave']);


route::get('/remove/{id}',[SaveController::class,'remove']);


route::get('/apply/{id}',[SaveController::class,'apply']);


route::post('/applied',[SaveController::class,'applied']);





route::get('/course/{id}',[Cousre::class,'payment']);


//<-----------USER COURSE----------->

route::get('/my_course/{id}',[CourseController::class,'my_course']);

route::get('/view_application/{id}',[CourseController::class,'view_application']);


route::get('/remove_application/{id}',[CourseController::class,'remove_application']);

route::get('/edit_application/{id}',[CourseController::class,'edit_application']);

route::post('/edited_application/{id}',[CourseController::class,'edited_application']);








route::get('/remove_course/{id}',[CourseController::class,'remove_course']);

route::post('/edit_course/{id}',[CourseController::class,'edit_course']);














//<-----------contact----------->

route::post('/send_contact',[HomeController::class,'send_contact']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



// route::get('products.purchase', $datas->id,[Cousre::class,'show']);

Route::post('products/{id}/purchase',[Cousre::class,'purchase'])->name('products.purchase');

