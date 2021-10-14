<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Estate;
use Illuminate\Http\Request;
use App\Models\PropertyGroup;
use App\Models\EstatePropertyGroup;
use App\Http\Requests\Estate\StoreEstateRequest;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estates = Estate::all();
        
        return Inertia::render('Estates/Index', [
            'estates' => $estates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propertyGroups = PropertyGroup::all();
    
        return Inertia::render('Estates/Create', [
            'propertyGroups' => $propertyGroups
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstateRequest $request)
    {
        // dd($request->all());

        $estate = Estate::create($request->all());

        foreach($request->properties as $property) {
            $estate->propertyGroups()->attach($property['property_id'], ['price' => $property['price']]);
        }

        return redirect()->route('estates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function show(Estate $estate)
    {
        $estate = $estate->load('propertyGroups');
        $propertyGroups = PropertyGroup::all();
    
        return Inertia::render('Estates/Show', [
            'estate' => $estate,
            'propertyGroups' => $propertyGroups
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function edit(Estate $estate)
    {
        $estate = $estate->load('propertyGroups');
        $propertyGroups = PropertyGroup::all();
            
        return Inertia::render('Estates/Edit', [
            'estate' => $estate,
            'propertyGroups' => $propertyGroups
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $estate = Estate::findOrFail($id);

        Estate::where('id', $estate->id)->update($request->only(['name', 'address']));

        EstatePropertyGroup::where('estate_id', $estate->id)->delete();

        foreach($request->properties as $property) {
            $estate->propertyGroups()->attach($property['property_id'], ['price' => $property['price']]);
        }

        return redirect()->route('estates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estate $estate)
    {
        //
    }
}
