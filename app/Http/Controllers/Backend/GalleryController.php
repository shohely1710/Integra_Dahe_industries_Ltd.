<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;
use File;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('backend.pages.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.pages.gallery.create');
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
            'image' => 'nullable|image',

        ],
            [
                'name.required' => 'Please provide a brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]

        );

        $gallery= new Gallery();
        $gallery->name = $request->name;
//        $gallery->description = $request->description;

        //insert images also
        if(($request->image) > 0){
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/galleries/' .$img);
            Image::make($image)->save($location);
            $gallery->image = $img;
        }
        $gallery->save();

        session()->flash('success', 'A new Gallery Image has added successfully!');
        return redirect()->route('admin.gallery');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image',

        ],
            [
                'name.required' => 'Please provide a brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]

        );

        $gallery= Gallery::find($id);
        $gallery->name = $request->name;
//        $gallery->description = $request->description;

        //insert images also

        if(($request->image) > 0){

            //Delete the old image from folder
            if(File::exists('images/galleries/' .$gallery->image)) {
                File::delete('images/galleries/' .$gallery->image);
            }
            //code...
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/galleries/' .$img);
            Image::make($image)->save($location);
            $gallery->image = $img;
        }
        $gallery->save();

        session()->flash('success', 'A new gallery image has updated successfully!');
        return redirect()->route('admin.gallery');
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
        $gallery= Gallery::find($id);
        if(!is_null($gallery)){
            return view('backend.pages.gallery.edit', compact('gallery'));
        }
        else{
            return redirect()->route('admin.gallery');
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
        $gallery = Gallery::find($id);
        if(!is_null($gallery)){

            if(File::exists('images/galleries/' .$gallery->image)){
                File::delete('images/galleries/' .$gallery->image);
            }
            $gallery->delete();

        }
        session()->flash('success', 'Gallery Image has deleted successfully !!');
        return back();
    }
}
