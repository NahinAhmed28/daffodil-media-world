<?php

namespace App\Http\Controllers;

use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'timelines' => Timeline::get()->toQuery()->paginate(5),
        ];
        return view('admin.timelines.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.timelines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'message' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'timeline' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/timeline')) {
                mkdir('assets/uploads/timeline', 0777, true);
            }
            $image->move('assets/uploads/timeline', $imageFileName);
            Image::make('assets/uploads/timeline/'.$imageFileName)->resize(600,600)->save('assets/uploads/timeline/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }

//        dd($request->all());
        $timeline = Timeline::create([
            'title' => $request->title,
            'description' => $request->description,
            'model' => $request->model,
            'category' => $request->category,
            'stock' => $request->stock,
            'status' => $request->status,
        ]);


        $data = [
            'timelines' => Timeline::get()->toQuery()->paginate(5),
        ];
        Alert::success('Timeline info Added', 'Timeline Info Added Successfully');
        return view('admin.timelines.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function show(Timeline $timeline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $timeline = Timeline::find($id);
        return view('admin.timelines.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Timeline $timeline)
    {
        $timelineImageFileName = $timeline->image;
        if ($request->hasFile('image')){
            $timelineImage = $request->file('image');
            $timelineImageFileName = 'timeline'.time() . '.' . $timelineImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/timeline')){
                mkdir('assets/uploads/timeline', 0777, true);
            }

            //delete old image if exist


            if (file_exists('assets/uploads/timeline/'.$timeline->image) and $timeline->image != 'default.png'){
                unlink('assets/uploads/timeline/'.$timeline->image);
            }
            $timelineImage->move('assets/uploads/timeline', $timelineImageFileName);
            Image::make('assets/uploads/timeline/'.$timelineImageFileName)->resize(600,600)->save('assets/uploads/timeline/'.$timelineImageFileName);
        }

        $timeline->update([
            'name' => $request->title,
            'description' => $request->description,
            'model' => $request->model,
            'category' => $request->category,
            'stock' => $request->stock,
            'status' => $request->status,
            'image' => $timelineImageFileName,

        ]);
        Alert::success('Timeline info Updated', 'Timeline Info Updated Successfully');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timeline  $timeline
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Timeline::destroy($id);
        return redirect()->back();
    }
}
