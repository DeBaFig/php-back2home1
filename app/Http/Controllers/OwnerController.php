<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Property;
use Illuminate\Http\Request;
use Auth;

class OwnerController extends Controller
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
        $viewData = Owner::all();
        return view('owner.all')->with('viewData', $viewData);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Owner::create($request->all());
        return redirect()->route('owner.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $viewData = Property::select('*')
            ->join('owners', 'owners.cpf', '=', 'properties.cpf')
            ->where('owners.id', '=', $id)
            ->get();
        $ownerData = Owner::where('id', '=', $id)->get();
        return view('owner.show')
            ->with('viewData', $viewData)
            ->with('ownerData', $ownerData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $owner = Owner::find($request->id);
        $owner->name = $request->name;
        $owner->cpf = $request->cpf;
        $owner->email = $request->email;
        $owner->address = $request->address;
        $owner->number_owner = $request->number_owner;
        $owner->district = $request->district;
        $owner->city = $request->city;
        $owner->state = $request->state;
        $owner->cep = $request->cep;
        $owner->save();
        return redirect()->route('owner.all');
    }

    // create the form with the data 
    public function formEdit($id)
    {
        $ownerData = Owner::where('id', '=', $id)->get();
        return view('owner.edit')
            ->with('ownerData', $ownerData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ownerData = Owner::select('*')->where('id', '=', $id)->first();
        $ownerData->isActive = 0;
        $ownerData->save();
        return redirect()->back();
    }
}
