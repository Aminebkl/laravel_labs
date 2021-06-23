<?php

namespace App\Http\Controllers;

use App\Models\TestimonialItem;
use Illuminate\Http\Request;

class TestimonialItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonialItems = TestimonialItem::all();
        return view("backoffice.testimonialItem.all", compact("testimonialItems"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.testimonialItem.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonialItem = new TestimonialItem;
        $testimonialItem -> description = $request -> description;
        $testimonialItem -> image = $request -> image;
        $testimonialItem -> nom = $request -> nom;
        $testimonialItem -> job = $request -> job;
        $testimonialItem -> created_at = now();

        $testimonialItem -> save();

        return redirect() -> route("testimonialItems.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function show(TestimonialItem $testimonialItem)
    {
        return view("backoffice.testimonialItem.show", compact("testimonialItem"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function edit(TestimonialItem $testimonialItem)
    {
        return view("backoffice.testimonialItem.edit", compact("testimonialItem"));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestimonialItem $testimonialItem)
    {
        $testimonialItem -> description = $request -> description;
        $testimonialItem -> image = $request -> image;
        $testimonialItem -> nom = $request -> nom;
        $testimonialItem -> job = $request -> job;
        $testimonialItem -> updated_at = now();

        $testimonialItem -> save();

        return redirect() -> route("testimonialItems.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestimonialItem  $testimonialItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestimonialItem $testimonialItem)
    {
        $testimonialItem -> delete();

        return redirect() -> back();
    }
}
