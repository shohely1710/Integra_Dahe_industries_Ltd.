<?php

namespace App\Http\Controllers\Backend;

use App\Models\CompanyImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use File;

class CompanyImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coms = CompanyImage::orderBy('id', 'desc')->get();
        return view('backend.pages.company_info_image.index',compact('coms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.company_info_image.create');
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

        ],
            [
//                'name.required' => 'Please provide a brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]

        );

        $com= new CompanyImage();
//        $com->name = $request->name;
//        $brand->description = $request->description;

        //insert images also
        if(($request->image) > 0){
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/coms/' .$img);
            Image::make($image)->save($location);
            $com->image = $img;
        }
        $com->save();

        session()->flash('success', 'A new image has added successfully!');
        return redirect()->route('admin.coms');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
//            'name' => 'required',
            'image' => 'nullable|image',

        ],
            [
//                'name.required' => 'Please provide a brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]

        );

        $com= CompanyImage::find($id);
//        $com->name = $request->name;
//        $brand->description = $request->description;

        //insert images also

        if(($request->image) > 0){

            //Delete the old image from folder
            if(File::exists('images/coms/' .$com->image)) {
                File::delete('images/coms/' .$com->image);
            }
            //code...
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/coms/' .$img);
            Image::make($image)->save($location);
            $com->image = $img;
        }
        $com->save();

        session()->flash('success', 'A new image has updated successfully!');
        return redirect()->route('admin.coms');
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
        $com= CompanyImage::find($id);
        if(!is_null($com)){
            return view('backend.pages.company_info_image.edit', compact('com'));
        }
        else{
            return redirect()->route('admin.coms');
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
        $com = CompanyImage::find($id);
        if(!is_null($com)){

            if(File::exists('images/coms/' .$com->image)){
                File::delete('images/coms/' .$com->image);
            }
            $com->delete();

        }
        session()->flash('success', 'Image has deleted successfully !!');
        return back();
    }
}
