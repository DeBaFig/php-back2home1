<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Property;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reference' => $this->faker->numberBetween(-10000, 10000),
            'description' => $this->faker->text,
            'address' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'total_size' => $this->faker->numberBetween(-10000, 10000),
            'useful_size' => $this->faker->numberBetween(-10000, 10000),
            'private_size' => $this->faker->numberBetween(-10000, 10000),
            'price' => $this->faker->numberBetween(-10000, 10000),
            'townhouse_price' => $this->faker->numberBetween(-10000, 10000),
            'master_bedrooms' => $this->faker->randomElement(["1+","2+","3+","4+","5+"]),
            'bedrooms' => $this->faker->randomElement(["1+","2+","3+","4+","5+"]),
            'bathroom' => $this->faker->randomElement(["1+","2+","3+","4+","5+"]),
            'parking_lot' => $this->faker->randomElement(["1+","2+","3+","4+","5+"]),
            'property_type' => $this->faker->randomElement(["Apartamento","Kitnet","Cobertura","\u00c1rea","Casa","Ch\u00e1cara","Comercial","Residencial","Geminado","Loja","Pousada","SObrado","Terreno","Triplex"]),
            'publish_at' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(["Ativo","Exclu\u00eddo","Pausado"]),
            'purpose' => $this->faker->randomElement(["comprar","alugar"]),
        ];
    }
}
