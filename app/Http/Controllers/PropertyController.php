<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except('home.index');
    }

    public static $casas = [
        [
            "id" => "1",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 123,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ],
        [
            "id" => "2",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 456,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "3",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 789,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "4",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 147,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ],
        [
            "id" => "5",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 258,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "6",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 369,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "7",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 357,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ],
        [
            "id" => "8",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 689,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "9",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 241,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "10",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 153,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ],
        [
            "id" => "11",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 759,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ], [
            "id" => "12",
            "title" => "Almirante - Frente Mar em Penha SC",
            "reference" => 953,
            "description" => "Empreendimento Frente Mar na Av Itapocoroy \n
            Apenas 100m da praia \n
            Ótimo padrão de acabamento \n
            Todo Mobiliado \n
            2 Vagas de Garagem \n\n
            Entre em contato e saiba mais.",
            "address" => "Almirante - Frente Mar em Penha SC",
            "total_size" => 17671,
            "useful_size" => 17671,
            "private_size" => 12000,
            "price" => 140000000,
            "townhouse_price" => 50000,
            'master_badrooms' => '1+',
            'badrooms' => '2+',
            'bathrooms' => '2+',
            "Parking_lot" => '2+',
            "property_type" => "Apartamento",
            "status" => 'Ativo',
            "purpose" => "comprar"
        ]
    ];

    
}
