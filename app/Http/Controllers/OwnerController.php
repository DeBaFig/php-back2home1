<?php

namespace App\Http\Controllers;

use App\Models\Owner;
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
        
        return back();
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
        dd($owner);
        return view('owner.show', ['owner'=> $owner]);
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

        // $owner->create_by = $email_user;
        $owner->name = $request->name;
        $owner->cpf = $request->cpf;
        $owner->email_owner = $request->email_owner;
        $owner->address = $request->address;
        $owner->number = $request->number;
        $owner->district = $request->district;
        $owner->city = $request->city;
        $owner->state = $request->state;
        $owner->cep = $request->cep;
        $owner->phone1 = $request->phone1;
        $owner->phone2 = $request->phone2;
        $owner->save();

        
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
