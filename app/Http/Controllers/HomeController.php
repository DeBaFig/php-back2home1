<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function building()
    {
        $viewData = [];
        $viewData["title"] = "Back2Home1";
        return view('building.index')->with("viewData", $viewData);
    }

    public function about_business()
    {
        $viewData = [];
        $viewData["title"] = "Sobre Back2Home1";
        $viewData["subtitle"] =  "Quem somos";
        return view('home.about_business')->with("viewData", $viewData);
    }    
}
