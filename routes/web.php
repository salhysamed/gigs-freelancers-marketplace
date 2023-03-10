<?php

use App\Models\Gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GigController;

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

Route::get('/gigs', [GigController::class,'index']);
Route::get('/gigs/create',[GigController::class,'create']);
Route::post('/gigs',[GigController::class,'store']);
Route::get('/gigs/{gig}', [GigController::class,'show']);


//index - show all listings
//show - show single listings
//create - show form to create new listing
//store - store new listing
//edit - show form to update listing
//update - store updated listing
//destroy - delete listing
