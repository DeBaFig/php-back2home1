<?php

namespace App\Http\Controllers;

use App\Models\Property;
// use App\Models\Owner;
use Illuminate\Http\Request;
use Auth;

class PropertyController extends Controller
{
    /**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('property.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $property = new Property();
        $email = Auth::user()->email;
        $title = $request->title;
        $price = $request->price;
        $purpose = $request->purpose;
        $property_type = $request->property_type;
        $description = $request->description;
        $address_immobile = $request->address_immobile;
        $number_immobile = $request->number_immobile;
        $district_immobile = $request->district_immobile;
        $city_immobile = $request->city_immobile;
        $state_immobile = $request->state_immobile;
        $cep_immobile = $request->cep_immobile;
        $master_bedrooms = $request->master_bedrooms;
        $bedrooms = $request->bedrooms;
        $bathroom = $request->bathroom;
        $parking_lot = $request->parking_lot;
        $useful_size = $request->useful_size;
        $private_size = $request->private_size;
        $total_size = $request->total_size;
        $townhouse_price = $request->townhouse_price;
        $comments = $request->comments;
        $status = $request->status;
        // $reference = $request->reference; 
        // $publish_at = $request->publish_at;


        // $property->reference = $reference;
        $property->title = $title;
        $property->description = $description;
        $property->address_immobile = $address_immobile;
        $property->number_immobile = $number_immobile;
        $property->district_immobile = $district_immobile;
        $property->city_immobile = $city_immobile;
        $property->state_immobile = $state_immobile;
        $property->cep_immobile = $cep_immobile;
        $property->total_size = $total_size;
        $property->useful_size = $useful_size;
        $property->private_size = $private_size;
        $property->price = $price;
        $property->townhouse_price = $townhouse_price;
        $property->master_bedrooms = $master_bedrooms;
        $property->bedrooms = $bedrooms;
        $property->bathroom = $bathroom;
        $property->parking_lot = $parking_lot;
        $property->property_type = $property_type;
        // $property->publish_at = $publish_at;
        $property->status = $status;
        $property->purpose = $purpose;
        $property->comments = $comments;
        $property->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
