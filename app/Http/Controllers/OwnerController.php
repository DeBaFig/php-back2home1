<?php

namespace App\Http\Controllers;

use App\Models\Owner;
// use App\Http\Controllers\Property;
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
        return view('property.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.owner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $owner = new Owner();
        $email_user = Auth::user()->email;
        $name = $request->name;
        $cpf = $request->cpf;
        $email_owner = $request->email_owner;
        $address = $request->address;
        $number = $request->number;
        $district = $request->district;
        $city = $request->city;
        $state = $request->state;
        $cep = $request->cep;
        $phone1 = $request->phone1;
        $phone2 = $request->phone2;
        

        $owner->create_by = $email_user;
        $owner->name = $name;
        $owner->cpf = $cpf;
        $owner->email_owner = $email_owner;
        $owner->address = $address;
        $owner->number = $number;
        $owner->district = $district;
        $owner->city = $city;
        $owner->state = $state;
        $owner->cep = $cep;
        $owner->phone1 = $phone1;
        $owner->phone2 = $phone2;
        
        $owner->save();

        // return "Proprietário cadastrado com sucesso!";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\owner  $owner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::findOrFail($id);
        return view('property.show', ['owner'=> $owner]);
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
        //
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
