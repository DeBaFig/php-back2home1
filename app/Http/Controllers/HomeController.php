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
        $viewData['popular'] = Property::select('photo_image', 'properties.id','title', 'property_id')
            ->join('photos', 'properties.id', '=', 'photos.property_id')
            ->where('properties.popular', '=','1')
            ->limit(6)
            ->get();
        $viewData['destaque'] = Property::select('photo_image', 'properties.id','title', 'property_id')
            ->join('photos', 'properties.id', '=', 'photos.property_id')
            ->where('properties.destaque', '=', '1')
            ->limit(6)
            ->get();
        $viewData["title"] = "Home-Back2Home1";
        $viewData["images"] = ['home1.jpg', 'home2.jpg', 'home3.jpg', 'home4.jpg', 'home5.jpg', 'home6.jpg'];
        return view('home.index')->with("viewData", $viewData);
    }

    public function contact()
    {
        return view('home.contact');
    }
    public function buy()
    {
        $viewData = [];
        $viewData["title"] = "Home-Back2Home1";
        $viewData['comprar'] = Property::select('photo_image', 'properties.id','properties.title', 'property_id')
            ->join('photos', 'properties.id', '=', 'photos.property_id')
            ->where('purpose', '=','comprar')
            ->limit(48)
            ->orderby('publish_at')
            ->get();
        // dd($viewData);
        return view('home.buy')
            ->with('viewData', $viewData);
    }
    public function rent()
    {
        $viewData = [];
        $viewData["title"] = "Home-Back2Home1";
        $viewData['comprar'] = Property::select('photo_image', 'properties.id','properties.title', 'property_id')
            ->join('photos', 'properties.id', '=', 'photos.property_id')
            ->where('purpose', '=','alugar')
            ->limit(48)
            ->orderby('publish_at')
            ->get();
        return view('home.rent')
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
}
