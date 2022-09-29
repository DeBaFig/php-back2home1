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
        // $viewData["casas"] = PropertyController::$casas;
        return view('home.index')->with("viewData", $viewData);
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function sell()
    {
        return view('home.sell');
    }
    public function rent()
    {
        return view('home.rent');
    }
    public function teste()
    {
        $viewData = [];
        // $viewData["casas"] = PropertyController::$casas;
        return view('home.cards')->with("viewData", $viewData);
    }
    public function about_b2h1()
    {
        $viewData = [];
        $viewData["title"] = "Sobre Back2Home1";
        $viewData["subtitle"] =  "Quem somos";
        $viewData["description1"] =  "A sua CASA precisa ser o seu LAR. Para isso, a Back 2 Home 1 - Imóveis, nasceu no ano de 2022, para atuar no mercado da compra e venda de imóveis, dispondo na sua carteira os melhores imóveis à venda. 
        Usamos a tecnologia e práticas inovadoras para criar soluções, visando a concretização de negócios que resultem em realização de sonhos.   
        Oferece aos seus clientes assessoria especializada para financiamento, e uma capacitada equipe de corretores.
        Por tudo isso, estamos aptos à prestar aos nossos clientes os melhores serviços, atendendo às suas expectativas e necessidades.";
        $viewData["description2"] = "        MISSÃO:Transformar sonhos em realidade é o que nos motiva! Trabalhamos com pessoas que têm sonhos e objetivos, e, para nós, é um prazer saber que fazemos parte da transformação de histórias e conquistas.";
        $viewData["description3"] = "        VALORES:
        CLIENTE – Satisfeito e valorizado;
        CONFIABILIDADE – Ética, Transparência e Integridade;
        RESPONSABILIDADE – Ambiental, Empresarial e Social;
        DESENVOLVIMENTO – Pessoal e Profissional.";
        return view('home.about_b2h1')->with("viewData", $viewData);
    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre Adriana e Denize";
        $viewData["subtitle"] =  "Quem somos";
        $viewData["description"] =  "Somos alunas do curso de PHP - do Projeto Entra 21 - 2022. Esta é uma aplicação web, desenvolvida como trabalho de conclusão de curso, referente à linguagem de programação PHP, com banco de dados e a ferramenta Laravel. Este projeto está sendo orientado pelo Professor Adriano Machado.";
        return view('home.about')->with("viewData", $viewData);
    }


    public function adminHome()
    {
        return view('admin.home');
    }
}
