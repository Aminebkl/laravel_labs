<?php

namespace App\Http\Controllers;

use App\Models\CarousselItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            "image"=> "required",
        ]);
        $carousselItem = new CarousselItem();

        $carousselItem->image = $request->file('image')->hashName();
        $request->file("image")->storePublicly("img","public");
        $carousselItem -> image = $request -> image;
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

        $request->validate([
            "image"=> "required",
        ]);
        
        if ($request->file('image')) {
            Storage::disk("public")->delete("img/" . $carousselItem->image);
            $carousselItem->image = $request->file("image")->hashName();
            $request->file("image")->storePublicly("img", "public");
        }

        $carousselItem -> image = $request -> image;
        $carousselItem -> updated_at = now();

        $carousselItem -> save();

        return redirect() -> route("caroussel_items.index");
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
