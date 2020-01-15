<?php

namespace App\Http\Controllers;

use App\Uses;
use Illuminate\Http\Request;
use Redirect;

class UsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $uses=Uses::all();
        return view("admin.pages.uses.home",compact('uses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.pages.uses.create");
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

        $uses = new Uses;

        if ($request->hasFile('image')) {
            $uses->image = $request->image->store('public/uses/image');
        }
        $uses->name = "Blog";
        $uses->author = $request->author;
        $uses->heading = $request->heading;
        $uses->content = $request->editor;
        $uses->save();

        return Redirect::to("admin/pages/uses/")->with('success', 'Sucessfully uploaded! ');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uses  $uses
     * @return \Illuminate\Http\Response
     */
    public function show(Uses $uses)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uses  $uses
     * @return \Illuminate\Http\Response
     */
    public function edit( $uses)
    {
        //
        $uses = Uses::find($uses);
        return view('admin.pages.uses.edit',compact('uses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uses  $uses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uses)
    {
        //
        $request->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        $uses = Uses::find($uses);

        if ($request->hasFile('image')) {
            $uses->image = $request->image->store('public/uses/image');
        }
        $uses->name = "Blog";
        $uses->author = $request->author;
        $uses->heading = $request->heading;
        $uses->content = $request->editor;
        $uses->save();

        return Redirect::to("admin/pages/uses/")->with('success', 'Sucessfully Updated! ');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uses  $uses
     * @return \Illuminate\Http\Response
     */
    public function destroy( $uses)
    {
        //
        Uses::where('id',$uses)->delete();
        return redirect('admin/pages/uses/')->with('success', 'Deleted Sucessfully!! ');
    }
}
