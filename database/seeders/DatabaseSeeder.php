<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(DepartmentSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(CivilStatusSeeder::class);
        $this->call(ProvincesSeeder::class);
        $this->call(DegreesInstructionSeeder::class);
        // $this->call(EmployeesSeeder::class);

        // Employee::factory(80)->create();
    }
}
