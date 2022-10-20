<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home-Back2Home1";
        $viewData["images"] = ['home1.jpg', 'home2.jpg', 'home3.jpg', 'home4.jpg', 'home5.jpg', 'home6.jpg'];
        $viewData['popular'] = Property::select('photo_image', 'properties.id', 'title', 'property_id')
            ->join('photos', 'properties.id', '=', 'photos.property_id')
            ->where('properties.popular', '=', '1')
            ->limit(6)
            ->get();
        $viewData['destaque'] = Property::select('photo_image', 'properties.id', 'title', 'property_id')
            ->join('photos', 'properties.id', '=', 'photos.property_id')
            ->where('properties.destaque', '=', '1')
            ->limit(6)
            ->get();
        $viewData["title"] = "Home-Back2Home1";
        $viewData["images"] = ['home1.jpg', 'home2.jpg', 'home3.jpg', 'home4.jpg', 'home5.jpg', 'home6.jpg'];
        return view('home.index')->with("viewData", $viewData);
    }

    public function buy()
    {
        $viewData = [];
        $viewData["title"] = "Home-Back2Home1";
        $query = Photo::select('photo_image', 'properties.id', 'title', 'property_id')
            ->leftJoin('properties', 'properties.id', '=', 'photos.property_id')
            ->where('purpose', '=', 'comprar')
            ->get();
        $viewData['comprar'] = collect($query)->unique('property_id');
        return view('home.buy')
            ->with('viewData', $viewData);
    }
    public function rent()
    {
        $viewData = [];
        $viewData["title"] = "Alugar-Back2Home1";
        $query = Photo::select('photo_image', 'properties.id', 'title', 'property_id')
            ->leftJoin('properties', 'properties.id', '=', 'photos.property_id')
            ->where('purpose', '=', 'alugar')
            ->get();
        $viewData['alugar'] = collect($query)->unique('property_id');
        return view('home.rent')
            ->with('viewData', $viewData);
    }
    public function simulador()
    {
        $viewData = [];
        $viewData["title"] = "Simulador-Back2Home1";
        return view('home.simulador')
            ->with('viewData', $viewData);
    }
    public function about_b2h1()
    {

        return view('home.about_b2h1');
    }
    public function about()
    {
        return view('home.about');
    }
    public function adminHome()
    {
        return view('admin.home');
    }
    public function show($id)
    {
        $viewData = [];
        $viewData["title"] = "Home-Back2Home1";
        $viewData['property'] = Property::where('id', '=', $id)->get();
        $viewData['photos'] = Photo::join('properties', 'properties.id', '=', 'photos.property_id')
            ->where('properties.id', '=', $id)->get();
        return view('home.show')
            ->with('viewData', $viewData);
    }
}
