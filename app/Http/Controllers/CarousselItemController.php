<?php

namespace App\Http\Controllers;

use App\Models\CarousselItem;
use Illuminate\Http\Request;

class CarousselItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousselItems = CarousselItem::all();
        return view("backoffice.carousselItem.all", compact("carousselItems"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.carousselItem.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carousselItem = new CarousselItem;
        $carousselItem -> image1 = $request -> image1;
        $carousselItem -> image2 = $request -> image2;
        $carousselItem -> created_at = now();

        $carousselItem -> save();

        return redirect() -> route("carousselItems.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarousselItem  $carousselItem
     * @return \Illuminate\Http\Response
     */
    public function show(CarousselItem $carousselItem)
    {
        return view("backoffice.carousselItem.show", compact("carousselItem"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarousselItem  $carousselItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CarousselItem $carousselItem)
    {
        return view("backoffice.carousselItem.edit", compact("carousselItem"));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarousselItem  $carousselItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarousselItem $carousselItem)
    {
        $carousselItem -> image1 = $request -> image1;
        $carousselItem -> image2 = $request -> image2;
        $carousselItem -> updated_at = now();

        $carousselItem -> save();

        return redirect() -> route("carousselItems.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarousselItem  $carousselItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarousselItem $carousselItem)
    {
        $carousselItem -> delete();

        return redirect() -> back();
    }
}
