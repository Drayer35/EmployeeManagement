<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1  = new Rol();   
        $rol1->description="admin";
        $rol1->save();

        $rol2  = new Rol();   
        $rol2->description="standar";
        $rol2->save();

        $rol3  = new Rol();   
        $rol3->description="guest";
        $rol3->save();

        $rol4  = new Rol();   
        $rol4->description="analyst";
        $rol4->save();
    }
}
