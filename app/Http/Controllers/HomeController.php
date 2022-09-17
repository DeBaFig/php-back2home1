<?php

namespace App\Http\Controllers;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function building()
    {
        $viewData = [];
        $viewData["title"] = "Back2Home1";
        return view('building.index');
    }
    
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre Back2Home1";
        $viewData["subtitle"] =  "Quem somos";
        $viewData["description"] =  "Somos alunas do curso de PHP - do Projeto Entra 21 - 2022. Esta é uma aplicação web, desenvolvida como trabalho de conclusão de curso, referente à linguagem de programação PHP, com banco de dados e a ferramenta Laravel. Este projeto está sendo orientado pelo Professor Adriano Machado.";
        return view('home.about')->with("viewData", $viewData);
    }    
}
