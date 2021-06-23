<?php

namespace App\Http\Controllers;

use App\Models\ServiceItem;
use Illuminate\Http\Request;

class ServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceItems = ServiceItem::all();
        return view("backoffice.serviceItem.all", compact("serviceItems"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.serviceItem.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serviceItem = new ServiceItem;
        $serviceItem -> titre = $request -> titre;
        $serviceItem -> icone = $request -> icone;
        $serviceItem -> description = $request -> description;
        $serviceItem -> created_at = now();

        $serviceItem -> save();

        return redirect() -> route("serviceItems.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceItem $serviceItem)
    {
        return view("backoffice.serviceItem.show", compact("serviceItem"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceItem $serviceItem)
    {
        return view("backoffice.serviceItem.edit", compact("serviceItem"));
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceItem $serviceItem)
    {
        $serviceItem -> titre = $request -> titre;
        $serviceItem -> icone = $request -> icone;
        $serviceItem -> description = $request -> description;
        $serviceItem -> updated_at = now();

        $serviceItem -> save();

        return redirect() -> route("serviceItems.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceItem  $serviceItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceItem $serviceItem)
    {
        $serviceItem -> delete();

        return redirect() -> back();
    }
}
