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
        return view("admin.pages.uses.home");
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
        $uses->heading = $request->heading;
        $uses->content = $request->editor;
        $uses->save();

        return Redirect::to("admin/pages/uses/$uses->id/edit")->withSuccess('Section '.$uses->id.' has been successfully Updated!!!!'); ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uses  $uses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uses $uses)
    {
        //
    }
}
