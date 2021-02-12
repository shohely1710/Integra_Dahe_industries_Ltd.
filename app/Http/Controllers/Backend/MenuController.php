<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::select('id', 'name')->get();
        return view('backend.pages.header.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.header.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',

        ],
            [
                'name.required' => 'Please provide a brand name',
            ]

        );

        $menu= new Menu();
        $menu->name = $request->name;

        $menu->save();

        session()->flash('success', 'A new menu Image has added successfully!');
        return redirect()->route('admin.menu');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',


        ],
            [
                'name.required' => 'Please provide a brand name',

            ]

        );

        $menu= Menu::find($id);
        $menu->name = $request->name;

        $menu->save();

        session()->flash('success', 'A new menu has updated successfully!');
        return redirect()->route('admin.menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu= Menu::find($id);
        if(!is_null($menu)){
            return view('backend.pages.header.edit', compact('menu'));
        }
        else{
            return redirect()->route('admin.menu');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        //
//    }

    public function delete($id)
    {
        $menu = Menu::find($id);

            $menu->delete();


        session()->flash('success', 'Menu has deleted successfully !!');
        return back();
    }
}
