<?php

namespace Database\Factories;

use App\Models\Income;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Income::class;
    public function definition()
    {
        $sources= ['Salary','Bonus','Freelance','Investment','Gift','Other'];
        return [
            'amount'=>$this->faker->randomFloat(2,100,10000),
            'description'=>$this->faker->sentence(),
            'user_id'=>User::inRandomOrder()->first()->id,
            'source'=>$this->faker->randomElement($sources),
            'currency'=>$this->faker->currencyCode(),
            'date'=>$this->faker->date(),
        ];
    }
}
