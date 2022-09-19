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
        $b = "<br>";
        $viewData = [];
        $viewData["title"] = "Sobre Back2Home1";
        $viewData["subtitle"] =  "Quem somos";
        $viewData["description1"] =  "A sua CASA precisa ser o seu LAR. Para isso, a Back 2 Home 1 - Imóveis, nasceu no ano de 2022, para atuar no mercado da compra e venda de imóveis, dispondo na sua carteira os melhores imóveis à venda. 
        Usamos a tecnologia e práticas inovadoras para criar soluções, visando a concretização de negócios que resultem em realização de sonhos.   
        Oferece aos seus clientes assessoria especializada para financiamento, e uma capacitada equipe de corretores.
        Por tudo isso, estamos aptos à prestar aos nossos clientes os melhores serviços, atendendo às suas expectativas e necessidades.";
        $viewData["description2"] = "MISSÃO" . $b . "Transformar sonhos em realidade é o que nos motiva! Trabalhamos com pessoas que têm sonhos e objetivos, e, para nós, é um prazer saber que fazemos parte da transformação de histórias e conquistas.";
        $viewData["description3"] = "VALORES" . $b . "CLIENTE – Satisfeito e valorizado. CONFIABILIDADE – Ética, Transparência e Integridade. RESPONSABILIDADE – Ambiental, Empresarial e Social. DESENVOLVIMENTO – Pessoal e Profissional.";
        return view('home.about_business')->with("viewData", $viewData);
    }    
}
