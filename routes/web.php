<?php

use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\Route;
use App\Models\Gig;
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
Route::get('/gigs/{gig}', [GigController::class,'show']);



//index - show all listings
//show - show single listings
//create - show form to create new listing
//store - store new listing
//edit - show form to update listing
//update - store updated listing
//destroy - delete listing
