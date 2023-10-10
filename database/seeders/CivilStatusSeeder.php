<?php

namespace Database\Seeders;

use App\Models\CivilStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CivilStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $civilStatus1= new CivilStatus();
        $civilStatus1->name ='Soltero';
        $civilStatus1->save();

        $civilStatus2= new CivilStatus();
        $civilStatus2->name ='Casado';
        $civilStatus2->save();
        
        $civilStatus3= new CivilStatus();
        $civilStatus3->name ='Divorciado';
        $civilStatus3->save();

        $civilStatus4= new CivilStatus();
        $civilStatus4->name ='Viudo';
        $civilStatus4->save();
    }
}
