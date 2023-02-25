<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;

class GigController extends Controller
{
    // list all gigs
    public function index(){
   
     /*  if(request()->tag)
        $gigs=Gig::where('tags','LIKE', '%'.request()->tag.'%')->get();
        else */
    
        $gigs=Gig::latest()
                        ->filter(request(['tag','search']))
                        ->get();

        return view('gigs.index', [
            'gigs' => $gigs
        ]);

    }

    //single gig
    public function show(Gig $gig){
        if($gig) {

            return view('gigs.show',[
                'gig' => $gig
            ]);
        } else {
        
        abort(404);
        }

    }

}
