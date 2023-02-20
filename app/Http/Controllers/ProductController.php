<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'products' => Product::get()->toQuery()->paginate(5),
        ];
        return view('admin.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.products.create');
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
            $imageFileName = 'product' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/product')) {
                mkdir('assets/uploads/product', 0777, true);
            }
            $image->move('assets/uploads/product', $imageFileName);
            Image::make('assets/uploads/product/'.$imageFileName)->resize(600,600)->save('assets/uploads/product/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }

//        dd($request->all());
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'model' => $request->model,
            'category' => $request->category,
            'stock' => $request->stock,
            'status' => $request->status,
        ]);


        $data = [
            'products' => Product::get()->toQuery()->paginate(5),
        ];
        Alert::success('Product info Added', 'Product Info Added Successfully');
        return view('admin.products.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $productImageFileName = $product->image;
        if ($request->hasFile('image')){
            $productImage = $request->file('image');
            $productImageFileName = 'product'.time() . '.' . $productImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/product')){
                mkdir('assets/uploads/product', 0777, true);
            }

            //delete old image if exist


            if (file_exists('assets/uploads/product/'.$product->image) and $product->image != 'default.png'){
                unlink('assets/uploads/product/'.$product->image);
            }
            $productImage->move('assets/uploads/product', $productImageFileName);
            Image::make('assets/uploads/product/'.$productImageFileName)->resize(600,600)->save('assets/uploads/product/'.$productImageFileName);
        }

        $product->update([
            'name' => $request->title,
            'description' => $request->description,
            'model' => $request->model,
            'category' => $request->category,
            'stock' => $request->stock,
            'status' => $request->status,
            'image' => $productImageFileName,

        ]);
        Alert::success('Product info Updated', 'Product Info Updated Successfully');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back();
    }
}
