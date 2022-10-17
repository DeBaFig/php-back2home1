<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
 
    public function mostra()
    {
        $viewData = Photo::all();
        return view('property.teste')->with('viewData', $viewData);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'images' => 'required',
    //         'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
      
    //     $images = [];
    //     if ($request->images){
    //         foreach($request->images as $key => $image)
    //         {
    //             $imageName = time().rand(1,99).'.'.$image->extension();  
                 
                
    //             //for storage upload
    //             /* $image->storeAs('images', $imageName); */


    //             $image->move(public_path('images'), $imageName);
    //             $images[]['photo_image'] = $imageName;
    //             $images[]['property_id'] = $request->reference_n;
    //         }
    //     }
  
    //     foreach ($images as $key => $image) {
    //         Photo::create($im);
    //     }
      
    //     return back()
    //             ->with('success','You have successfully upload image.')
    //             ->with('images', $images); 
    // }
}
