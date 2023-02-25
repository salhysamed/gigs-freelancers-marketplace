<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GigController extends Controller
{
    // list all gigs
    public function index(){
    
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


    // show create a new gig form
    public function create(){
        return view('gigs.create');
    }

    // store new gig data
    public function store(Request $request){
       
        $formFields = $request->validate([
            'title' => 'required', 
            'company' => ['required', Rule::unique('gigs','company')],
            'location' => 'required',
            'email' =>['required','email']
        ]);
        Gig::create($formFields);

        
        return redirect('/gigs')->with('message', 'Gig created successfully');



    }



}
