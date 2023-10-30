<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Employee;



class EmployeesSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        DB::beginTransaction();


        try {
            foreach (range(1, 30) as $index) {
                $employee = new Employee;
                $employee->date_admision = $faker->date;
                $employee->name = $faker->firstName;
                $employee->last_name = $faker->lastName;
                $employee->birthdate = $faker->date;
                $employee->dni = $faker->randomNumber(1, 9999);
                $employee->email = $faker->safeEmail();
                $employee->phone = $faker->randomNumber(1,9999);
                $employee->status_id = $faker->numberBetween(1, 4);
                $employee->gender_id = $faker->numberBetween(1, 3);
                $employee->department_id = $faker->numberBetween(1, 25);
                $employee->province_id = $faker->numberBetween(1, 25);
                $employee->address = $faker->address;
                $employee->degree_instruction_id=$faker->numberBetween(1,5);
                $employee->children = $faker->numberBetween(0, 5);
                $employee->profession = $faker->randomElement([
                'Ingenieria Civil', 
                'Ingenieria Mecanica', 
                'Ingenieria de Sistemas', 
                'Ingenieria Industrial']);
                $employee->photo = null;
                $employee->save();
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }

        
    }
}
