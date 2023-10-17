<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */
    protected $model = Employee::class;
    public function definition()
    {
    
       
   
        return [
            'date_admision'=> now(),
            'name' =>fake()->name(),
            'last_name' => fake()->lastName(),
            'birthdate' =>now(),
            'dni' => fake()->randomNumber(1, 9999), 
            'email' => fake()->unique()->safeEmail(), 
            'phone' => fake()->randomNumber(1,9999),
            'profession' =>fake()->randomElement(['Ingenieria Civil', 'Ingenieria Mecanica', 'Ingenieria de Sistemas', 'Ingenieria Industrial']), 
            'status_id' => 1,
            'gender_id' => 1,
            'department_id' => fake()->randomNumber(1, 25),
            'province_id' => fake()->randomNumber(1, 3),
            'photo' => null, 
        ];
    }
}