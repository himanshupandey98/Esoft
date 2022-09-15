<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'company_name'=>$this->faker->company(),
            'email'=>$this->faker->email(),
            'logo'=>$this->faker->image(),
            'website'=>$this->faker->url()
        ];
    }
}
