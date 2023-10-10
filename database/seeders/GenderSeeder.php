<?php

namespace Database\Seeders;
use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender1 = new  Gender();
        $gender1->gender='Masculino';
        $gender1->save();

        $gender2 = new  Gender();
        $gender2->gender='Femenino';
        $gender2->save();

        $gender3 = new  Gender();
        $gender3->gender='Otro';    
        $gender3->save();
    }
}
