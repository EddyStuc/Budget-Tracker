<?php

namespace Database\Factories;

use App\Models\Budget;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'cost' => $this->faker->randomFloat(4, 0, 10000),
            'category_id' => Category::all()->random()->id,
            'budget_id' => Budget::all()->random()->id,
        ];
    }
}
