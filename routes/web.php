<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use \App\Models\Admin;
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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books',[ProductController::class,'index'])->name('allbook');
Route::get('/books/borrow/{id}',[ProductController::class,'softdelete'])->name('allborrows')->middleware('auth');
Route::get('/book/details/{id}',[ProductController::class,'singlebook'])->name('details');
Route::get('/allbook/{id}',[ProductController::class,'restore'])->name('returnbook')->middleware('auth');;
Route::get('/borrowed',[ProductController::class,'show'])->name('borrowedbooks')->middleware('auth');;
Route::get('/about',[ProductController::class,'about'])->name('about');
Route::get('/profile',[ProductController::class,'profile'])->name('profile');
Route::get('/profile',[ProductController::class,'edit'])->name('editprofile');
Route::put('/profile/update',[ProductController::class,'update'])->name('updateprofile');

Route::get('/admin/login',[AdminController::class,'login'])->name('adminlogin');
Route::post('/admin/login',[AdminController::class,'cheklogin'])->name('checkadminlogin');
Route::get('/admin/index',[AdminController::class,'index'])->name('admins.dashboard')->middleware('auth:admin');
Route::get('/admin/alladmins',[AdminController::class,'alladmins'])->name('alladmins')->middleware('auth:admin');
Route::get('/admin/createadmin',[AdminController::class,'createadmin'])->name('createadmin')->middleware('auth:admin');
Route::post('/admin/storeadmin',[AdminController::class,'storeadmin'])->name('storeadmin')->middleware('auth:admin');
Route::get('/admin/allusers',[AdminController::class,'allusers'])->name('allusers')->middleware('auth:admin');
Route::get('/admin/allboks',[AdminController::class,'allbooks'])->name('allboks')->middleware('auth:admin');
// Route::post('/admin/allboks',[AdminController::class,'storebook'])->name('allboks')->middleware('auth:admin');
Route::get('/admin/borroweds',[AdminController::class,'borrowedbookss'])->name('borrowedbookss')->middleware('auth:admin');
Route::get('/admin/addbook',[AdminController::class,'addbook'])->name('addbook')->middleware('auth:admin');
Route::post('/admin/store',[AdminController::class,'storebook'])->name('storebook')->middleware('auth:admin');
Route::get('/admin/delete/{id}',[AdminController::class,'forceDelete'])->name('deletebook')->middleware('auth:admin');
// Route::get('/admin/updatebook/{id}',[AdminController::class,'updatebook'])->name('updatebook')->middleware('auth:admin');
Route::get('/admin/updatebook/{id}',[AdminController::class,'editbook'])->name('editbook')->middleware('auth:admin');
Route::post('/admin/updatebook/{id}',[AdminController::class,'updatebook'])->name('updatebook')->middleware('auth:admin');
Route::get('/search',[AdminController::class,'search'])->name('search')->middleware('auth:admin');
Route::get('/adminprofile/{id}',[AdminController::class,'adminprofile'])->name('adminprofile')->middleware('auth:admin');
Route::get('/editeadmin/{id}',[AdminController::class,'editeadmin'])->name('editeadmin')->middleware('auth:admin');
Route::post('/admin/updateadmin/{id}',[AdminController::class,'updateadmin'])->name('updateadmin')->middleware('auth:admin');








