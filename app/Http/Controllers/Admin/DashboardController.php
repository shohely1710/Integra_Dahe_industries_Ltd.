<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller

    //
{
    public function construct(){
//        $this->middleware('guest:admin');

        $this->middleware('auth');
    }
    public function index()
    {
//        $id= Auth::loginUsingId(1);
//        if (Auth::attempt('id' => $id) {
        // The user is active, not suspended, and exists.

        return view('backend.pages.dashboard.index');
    }

}
