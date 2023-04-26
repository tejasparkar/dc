<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CRMController;
use App\Models\CRM;
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
    $data = CRM::where('id','=',2)->first();
    //dd($data);
    return view('welcome')->with(compact('data'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');})->name('login');


Route::get('/register', function () {
    return view('register');})->name('register');
Route::post('/register',[UserController::class,'saveUser']);   


// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Log In User
Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::get('/dashboard',[UserController::class,'dashboard'])->middleware('auth');


//CRM
Route::get('/edithome',[CRMController::class, 'editHome'])->middleware('auth');;
Route::get('/editabout',[CRMController::class, 'editabout'])->middleware('auth');;
Route::get('/editcontact',[CRMController::class, 'editcontact'])->middleware('auth');;

Route::post('/saveHomePage', [CRMController::class,'saveHomePage'])->middleware('auth');
    

//UPLOAD THE MULTIPLE IMAGES
Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');


