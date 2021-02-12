<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use App\Models\Profile;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Image;
use File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::orderBy('id', 'desc')->get();
        return view('backend.pages.profile.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        return view('backend.pages.profile.create');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd($request->all());
        $data=$this->validate($request, [
            'title'  => 'required|max:150',
            'image'  => 'required|image',
            'description' => 'required',

        ],
            [
                'title.required'  => 'Please provide profile title',
                'image.required'  => 'Please provide profile image',
                'image.image'  => 'Please provide a valid profile image',
                'description.required' => 'Please provide profile description',
            ]);

        $data['image']=$request['image']->store('profile_image','public');
        Profile::create($data);


        session()->flash('success', 'A new image has added successfully !!');
        return redirect()->route('admin.profiles');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'  => 'required',
            'image'  => 'nullable|image',
            'description' => 'required',

        ],
            [
                'title.required'  => 'Please provide profile title',
                'image.image'  => 'Please provide a valid profile image',
                'description.required' => 'Please provide profile description',
            ]);

        $profile = Profile::find($id);
        $profile->title = $request->title;
        $profile->description  = $request->description;

        if ($request->image > 0) {
            // Delete the old Slider
            if (File::exists('images/profiles/'.$profile->image)) {
                File::delete('images/profiles/'.$profile->image);
            }

            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = public_path('images/profiles/' .$img);
            Image::make($image)->save($location);
            $profile->image = $img;
        }
        $profile->save();

        session()->flash('success', 'Profile Image has updated successfully !!');
        return redirect()->route('admin.profiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $profile = Profile::find($id);
        if (!is_null($profile)) {
            //Delete Image
            if (File::exists('images/profiles/'.$profile->image)) {
                File::delete('images/profiles/'.$profile->image);
            }
            $profile->delete();
        }
        session()->flash('success', 'Profile Image has deleted successfully !!');
        return back();

    }
}
