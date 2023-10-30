<?php

namespace Database\Seeders;

use App\Models\DegreeInstruction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DegreesInstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $degree1= new DegreeInstruction();
        $degree1->degree="Inicial";
        $degree1->save();

        $degree2= new DegreeInstruction();
        $degree2->degree="Primaria";
        $degree2->save();

        $degree3= new DegreeInstruction();
        $degree3->degree="Secundaria";
        $degree3->save();

        $degree4= new DegreeInstruction();
        $degree4->degree="Superior";
        $degree4->save();

        $degree5= new DegreeInstruction();
        $degree5->degree="Maestria - Doctorado";
        $degree5->save();
    }
}
