<?php

namespace Database\Factories;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Expense::class;
    public function definition()
    {
        return [
            
            'amount'=>$this->faker->randomFloat(2,10,1000),
            'description'=>$this->faker->sentence(),
            'expense_category_id'=>ExpenseCategory::inRandomOrder()->first()->id,
            'user_id'=>User::inRandomOrder()->first()->id,
            'currency'=>$this->faker->currencyCode(),
            'date'=>$this->faker->optional()->date(),
            'status'=>$this->faker->randomElement(['paid','unpaid']),
        ];
    }
}
