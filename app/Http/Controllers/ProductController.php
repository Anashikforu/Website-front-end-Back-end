<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product=Product::all();
        return view("admin.pages.products.home",compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.pages.products.create");
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
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $product = new Product;

        if ($request->hasFile('image')) {
            $product->image = $request->image->store('public/products/image');
        }
        $product->name = "Product";
        $product->heading = $request->heading;
        $product->content = $request->editor;
        $product->save();

        return Redirect::to("admin/pages/product/")->with('success', 'Sucessfully uploaded! ');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        //
        $product = Product::find($product);
        return view('admin.pages.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        //
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $product = Product::find($product);

        if ($request->hasFile('image')) {
            $product->image = $request->image->store('public/products/image');
        }

        $product->heading = $request->heading;
        $product->content = $request->editor;
        $product->save();

        return Redirect::to("admin/pages/product/")->withSuccess('Successfully Updated!!!!'); ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        Product::where('id',$id)->delete();
        return redirect('admin/pages/product/')->with('success', 'Deleted Sucessfully! ');
    }
}
