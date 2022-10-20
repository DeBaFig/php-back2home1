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
            ->where('owners.id', '=', $id)
            ->get();
        $ownerData = Owner::where('id', '=', $id)->get();
        return view('property.show')
            ->with('propertyData', $propertyData)
            ->with('ownerData', $ownerData);
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
        ]);
        $property = Property::create($request->all());

        if ($request->images) {
            foreach ($request->images as $image) {
                $filename = $image->store('images');
                $image->move(public_path('images'), $filename);
                Photo::create([
                    'property_id' => $property->id,
                    'photo_image' => $filename
                ]);
            }
        }

        return redirect()->back();
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
    public function edit($id)
    {
        $viewData = Property::find($id)->get();
        return view('property.all')->with('viewData', $viewData);
    }
    
    public function formEdit($id)
    {
        $viewData = Property::find($id)->get();
        return view('property.all')->with('viewData', $viewData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propertyData = Property::find($id);
        $propertyData->isActive = 0;
        $propertyData->save();
        return redirect()->back();
    }
}
