<?php

namespace App\Http\Controllers\Backend;

use App\Models\Enterprise;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enterprises = Enterprise::orderBy('id', 'desc')->get();
        return view('backend.pages.enterprise.index',compact('enterprises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.enterprise.create');
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
//            'name' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',

        ],
            [
//                'name.required' => 'Please provide a brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
                'description.required' => 'Please provide profile description',
            ]

        );

        $enterprise= new Enterprise();
//        $com->name = $request->name;
        $enterprise->description = $request->description;

        //insert images also
        if(($request->image) > 0){
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/enterprise/' .$img);
            Image::make($image)->save($location);
            $enterprise->image = $img;
        }
        $enterprise->save();

        session()->flash('success', 'A new image has added successfully!');
        return redirect()->route('admin.enterprise');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
//            'name' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',

        ],
            [
//                'name.required' => 'Please provide a brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
                'description.required' => 'Please provide profile description',
            ]

        );

        $enterprise= Enterprise::find($id);
//        $com->name = $request->name;
        $enterprise->description = $request->description;

        //insert images also

        if(($request->image) > 0){

            //Delete the old image from folder
            if(File::exists('images/enterprise/' .$enterprise->image)) {
                File::delete('images/enterprise/' .$enterprise->image);
            }
            //code...
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/enterprise/' .$img);
            Image::make($image)->save($location);
            $enterprise->image = $img;
        }
        $enterprise->save();

        session()->flash('success', 'A new image has updated successfully!');
        return redirect()->route('admin.enterprise');
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
        $enterprise= Enterprise::find($id);
        if(!is_null($enterprise)){
            return view('backend.pages.enterprise.edit', compact('enterprise'));
        }
        else{
            return redirect()->route('admin.enterprise');
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
        $enterprise = Enterprise::find($id);
        if(!is_null($enterprise)){

            if(File::exists('images/enterprise/' .$enterprise->image)){
                File::delete('images/enterprise/' .$enterprise->image);
            }
            $enterprise->delete();

        }
        session()->flash('success', 'Image has deleted successfully !!');
        return back();
    }
}

