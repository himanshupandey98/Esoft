<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_id'=>$this->faker->randomDigit(),
            'firstname'=>$this->faker->name(),
            'lastname'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'mobileno'=>$this->faker->numerify('##########'),

            'profile_picture'=>$this->faker->image(),
            
        ];
    }
}
