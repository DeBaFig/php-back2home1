<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Property;
use App\Models\Owner;
use Illuminate\Http\Request;

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
    public function table()
    {
        $viewData = Property::all();
        return view('property.all')->with('viewData', $viewData);
    }

    public function show($id)
    {
        $propertyData = Property::select('*')
            ->join('owners', 'owners.cpf', '=', 'properties.cpf')
            ->where('properties.id', '=', $id)
            ->get();
        return view('property.show')
            ->with('propertyData', $propertyData);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reference = Property::count() + 1;
        return view('property.add')->with('reference_n', $reference);
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
            'cpf' => 'required',
        ]);
        $property = Property::create($request->all());
        Photo::create([
            'property_id' => $property->id,
            'photo_url' => $request->url_photo
        ]);
        // if ($request->images) {
        //     foreach ($request->images as $image) {
        //         $filename = $image->store('images');
        //         $image->move(public_path('images'), $filename);
        //         Photo::create([
        //             'property_id' => $property->id,
        //             'photo_image' => $filename
        //         ]);
        //     }
        // }
        return redirect()->route('property.all');
    }



    public function ownerCheck(Request $request)
    {
        $cpfFinded = Owner::select('cpf')->where('cpf', '=', $request->cpf)->get();
        if ($cpfFinded->isEmpty()) {
            return redirect()->route('property.add')->with('error', 'CPF não encontrado');
        } else {
            return redirect()->route('property.add')
                ->with('result', 'CPF encontrado.')
                ->with('cpfFinded', $cpfFinded);
        }
    }

    /**'home'
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $propertyData = Property::find($request->id);
        $propertyData->title = $request->title;
        $propertyData->cpf = $request->cpf;
        $propertyData->description = $request->description;
        $propertyData->address = $request->address;
        $propertyData->number_property = $request->number_property;
        $propertyData->district = $request->district;
        $propertyData->city = $request->city;
        $propertyData->state = $request->state;
        $propertyData->cep = $request->cep;
        $propertyData->price = $request->price;
        $propertyData->townhouse_price = $request->townhouse_price;
        $propertyData->master_bedrooms = $request->master_bedrooms;
        $propertyData->bedrooms = $request->bedrooms;
        $propertyData->bathroom = $request->bathroom;
        $propertyData->parking_lot = $request->parking_lo;
        $propertyData->property_type = $request->property_type;
        $propertyData->purpose = $request->purpose;
        $propertyData->useful_size = $request->useful_size;
        $propertyData->total_size = $request->total_size;
        $propertyData->private_size = $request->private_size;
        $propertyData->comments = $request->comments;
        $propertyData->save();
        return redirect()->route('property.all');
    }

    public function formEdit($id)
    {
        $propertyData = Property::where('id', $id)->get();
        $photos = Photo::where('property_id', $id)->get();
        return view('property.edit')
        ->with('propertyData', $propertyData)
        ->with('photos', $photos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propertyData = Property::select('*')->where('id', '=', $id)->first();
        $propertyData->isActive = 0;
        $propertyData->save();
        return redirect()->back();
    }

    public function destaqueOn($id)
    {
        Property::where('id', '=', $id)->update(['destaque' => 1]);
        return redirect()->back();
    }
    public function destaqueOff($id)
    {
        Property::where('id', '=', $id)->update(['destaque' => 0]);
        return redirect()->back();
    }
    public function popularOn($id)
    {
        Property::where('id', '=', $id)->update(['popular' => 1]);
        return redirect()->back();
    }
    public function popularOff($id)
    {
        Property::where('id', '=', $id)->update(['popular' => 0]);
        return redirect()->back();
    }
}
