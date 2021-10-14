<?php

namespace Database\Factories;

use App\Models\EstatePropertyGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstatePropertyGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EstatePropertyGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'estate_id' => rand(1, 2),
            'property_group_id' => rand(1, 3),
            'price' => 80000000,
        ];
    }
}
