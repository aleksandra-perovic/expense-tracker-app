<?php

namespace Database\Factories;

use App\Models\Goal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Goal>
 */
class GoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Goal::class;
    public function definition()
    {
        $statuses= ['in_progress','achieved','failed'];
        return [
            
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'target_amount'=>$this->faker->randomFloat(2,500,50000),
            'current_amount'=>$this->faker->randomFloat(2,0,25000),
            'user_id'=>User::inRandomOrder()->first()->id,
            'deadline'=>$this->faker->optional()->date(),
            'status'=>$this->faker->randomElement($statuses),
        ];
    }
}
