<?php

namespace App\Http\Controllers;

use App\Models\Photo;
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
        return view('property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reference = Property::count() + 1;
        return view('property.property')->with('reference_n', $reference);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'purpose' => 'required',
        ]);
        $user = Auth::user()->id;
        $property = new Property();
        $property->title = $request->title;
        $property->purpose = $request->purpose;
        $property->reference_n = $request->reference_n;
        $property->price = $request->price;
        $property->property_type = $request->property_type;
        $property->townhouse_price = $request->townhouse_price;
        $property->address = $request->address;
        $property->number_property = $request->number_property;
        $property->cep = $request->cep;
        $property->district = $request->district;
        $property->city = $request->city;
        $property->state = $request->state;
        $property->master_bedrooms = $request->master_bedrooms;
        $property->bedrooms = $request->bedrooms;
        $property->bathroom = $request->bathroom;
        $property->parking_lot = $request->parking_lot;
        $property->useful_size = $request->useful_size;
        $property->private_size = $request->private_size;
        $property->total_size = $request->total_size;
        $property->description = $request->description;
        $property->comments = $request->comments;
        $property->user_id = $user;

        if ($request->image_property) {
            foreach ($request->image_property as $key => $image) {
                $imageName = time().'.'.$image->getClientOriginalExtension(); 
                // $image->move(public_path('uploads/photos/'), $imageName); 
                $image->storeAs('images', $imageName);
                $images[]['name'] = $imageName;
                $images[]['property_id'] = $property->reference_n;
                $images[]['create_at'] = now();
            }
            foreach ($images as $key => $image) {
                Photo::create($image);
            }
        }
        $property->save();
        // return "Imóvel cadastrado com sucesso!";
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viewData = [];
        $viewData["title"] = "Home-Back2Home1";
        $viewData['property'] = Property::where('id', '=', $id)->get();
        $viewData['photos'] = Photo::join('properties', 'properties.id', '=', 'photos.property_id')
            ->where('properties.id', '=', $id)->get();
        // dd($viewData);
        return view('property.show')
            ->with('viewData', $viewData);
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
