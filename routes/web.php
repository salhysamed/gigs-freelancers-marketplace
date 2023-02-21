<?php

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

Route::get('/gigs', function(){

    return view('gigs', [
        'heading' => 'list of recent gigs',
        'gigs' => Gig::all()
    ]);

});

Route::get('/gigs/{gig}', function (Gig $gig) {
    
    if($gig) {

        return view('gig',[
            'gig' => $gig
        ]);
    } else {
    
    abort(404);
    }

});
