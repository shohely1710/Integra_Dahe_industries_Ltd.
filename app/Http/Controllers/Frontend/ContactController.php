<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function create()
    {
        return view('frontend.contact');
    }
    public function store(Request $request)
    {
        $data  = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'brand' => 'required|max:25',
            'color' => 'required',
            'type' => 'required',
            'message'=> 'required',
        ]);
        Contact::create($request->all());
        return redirect('/contact')->with('message','Thanks to connected with us!');



    }

}
