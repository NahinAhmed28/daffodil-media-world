<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class FilterController extends Controller
{
    public function index()
    {
        $data = [
            'filters' => Filter::get()->toQuery()->paginate(5),
        ];
        return view('admin.filters.index', $data);
    }

    public function create()
    {
        return view('admin.filters.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $filter = Filter::create([
            'name' => $request->name,
        ]);
        $data = [
            'filters' => Filter::get()->toQuery()->paginate(5),
        ];
        Alert::success('Filter created', 'Filter  info created successfully');
        return view('admin.filters.index', $data);
    }
    public function show(Filter $filter)
    {
        //
    }
    public function edit($id)
    {
        $filter = Filter::find($id);
        return view('admin.filters.edit', compact('filter'));
    }

    public function update(Request $request, Filter $filter)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $filter->update([
            'name' => $request->name,


        ]);
        Alert::success('Filter updated', 'Filter  info updated successfully');
        return redirect()->route('filter.index');
    }
    public function destroy($id)
    {
        Filter::destroy($id);
        return redirect()->back();
    }
}
