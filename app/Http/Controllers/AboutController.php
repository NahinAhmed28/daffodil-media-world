<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'about' => About::first(),
            ];

        return view('admin.abouts.edit', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, About $about)
    {
//        dd($request->all());

        $request->validate([
            'description' => 'required',
            'image' => 'required',

        ]);

        $aboutImageFileName = $about->image;
        if ($request->hasFile('image')) {
            $aboutImage = $request->file('image');
            $aboutImageFileName = 'about' . time() . '.' . $aboutImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/about')) {
                mkdir('assets/uploads/about', 0777, true);
            }

            //delete old image if exist


            if (file_exists('assets/uploads/about/' . $about->image) and $about->image != 'default.png') {
                unlink('assets/uploads/about/' . $about->image);
            }
            $aboutImage->move('assets/uploads/about', $aboutImageFileName);
            Image::make('assets/uploads/about/' . $aboutImageFileName)->resize(600, 400)->save('assets/uploads/about/' . $aboutImageFileName);
        }

         $about->update([
            'description' => $request->description,
            'image' => $aboutImageFileName,
        ]);

        $data = [
            'about' => About::first(),
        ];

        Alert::success('About Info updated', 'information updated successfully');
        return view('admin.abouts.edit',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }


}
