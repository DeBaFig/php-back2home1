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
        return redirect()->back();
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
    public function edit(owner $owner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, owner $owner)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(owner $owner)
    {
        //
    }
}
