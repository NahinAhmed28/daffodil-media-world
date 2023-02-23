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
            'timeline' => Timeline::first(),
        ];

        return view('admin.timelines.edit', $data);
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
            'clients' => 'required',
            'projects' => 'required',
            'experience' => 'required',
            'awards' =>'required',
        ]);


//        dd($request->all());

        $timeline = Timeline::create([
            'clients' => $request->clients,
            'projects' => $request->projects,
            'experience' => $request->experience,
            'awards' => $request->awards,
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

        $timeline->update([
            'clients' => $request->clients,
            'projects' => $request->projects,
            'experience' => $request->experience,
            'awards' => $request->awards,
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
