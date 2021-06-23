<?php

namespace App\Http\Controllers;

use App\Models\Caroussel;
use Illuminate\Http\Request;

class CarousselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caroussels = Caroussel::all();
        return view("backoffice.caroussel.all", compact("caroussels"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.caroussel.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $caroussel = new Caroussel;
        $caroussel -> image = $request -> image;
        $caroussel -> description = $request -> description;
        $caroussel -> logo = $request -> logo;
        $caroussel -> created_at = now();

        $caroussel -> save();

        return redirect() -> route("caroussels.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function show(Caroussel $caroussel)
    {
        return view("backoffice.caroussel.show", compact("caroussel"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function edit(Caroussel $caroussel)
    {
        return view("backoffice.caroussel.edit", compact("caroussel"));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caroussel $caroussel)
    {
        $caroussel -> image = $request -> image;
        $caroussel -> description = $request -> description;
        $caroussel -> logo = $request -> logo;
        $caroussel -> updated_at = now();

        $caroussel -> save();

        return redirect() -> route("caroussels.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caroussel $caroussel)
    {
        $caroussel -> delete();

        return redirect() -> back();
    }
}
