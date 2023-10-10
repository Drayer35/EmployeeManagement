<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dep1 = new Department();
        $dep1->department='Amazonas';
        $dep1->save();

        $dep2 = new Department();
        $dep2->department='Ancash';
        $dep2->save();

        $dep3 = new Department();
        $dep3->department='Apurimac';
        $dep3->save();

        $dep4 = new Department();
        $dep4->department='Arequipa';
        $dep4->save();

        $dep5 = new Department();
        $dep5->department='Ayacucho';
        $dep5->save();

        $dep6 = new Department();
        $dep6->department='Cajamarca';
        $dep6->save();

        $dep7 = new Department();
        $dep7->department='Callao';
        $dep7->save();

        $dep8 = new Department();
        $dep8->department='Cusco';
        $dep8->save();

        $dep9 = new Department();
        $dep9->department='Huancavelica';
        $dep9->save();

        $dep10 = new Department();
        $dep10->department='Huanuco';
        $dep10->save();

        $dep11 = new Department();
        $dep11->department='Ica';
        $dep11->save();

        $dep12 = new Department();
        $dep12->department='Junin';
        $dep12->save();

        $dep13 = new Department();
        $dep13->department='La Libertad';
        $dep13->save();

        $dep14 = new Department();
        $dep14->department='Lambayeque';
        $dep14->save();

        $dep15 = new Department();
        $dep15->department='Lima';
        $dep15->save();

        $dep16 = new Department();
        $dep16->department='Loreto';
        $dep16->save();

        $dep17 = new Department();
        $dep17->department='Madre de Dios';
        $dep17->save();

        $dep18 = new Department();
        $dep18->department='Moquegua';
        $dep18->save();

        $dep19 = new Department();
        $dep19->department='Pasco';
        $dep19->save();

        $dep20 = new Department();
        $dep20->department='Piura';
        $dep20->save();

        $dep21 = new Department();
        $dep21->department='Puno';
        $dep21->save();

        $dep22 = new Department();
        $dep22->department='San Martin';
        $dep22->save();

        $dep23 = new Department();
        $dep23->department='Tacna';
        $dep23->save();

        $dep24 = new Department();
        $dep24->department='Tumbes';
        $dep24->save();

        $dep25 = new Department();
        $dep25->department='Ucayali';
        $dep25->save();
    }
}
