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
        $propertyData = Property::find($id)->get();
        if ($propertyData->cpf != null) {
            $ownerData = Owner::where('cpf', '=', $propertyData->cpf)->get();
            return view('property.show')
                ->with('propertyData', $propertyData)
                ->with('ownerData', $ownerData);
        } else {
            return view('property.show')->with('error', 'Não foi possivel encontrar o cpf do proprietário, por gentileza verifique se está cadastrado.');
        }
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
        $cpf = Owner::select('cpf')->where('cpf', '=', $request->cpf)->get();
        if (!$cpf->isEmpty()) {
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
            return redirect()->route('property.all');
        }
        return redirect()->route('property.add')->with('error', 'CPF não encontrado, por gentileza cadastrar o proprietário primeiro.');
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
