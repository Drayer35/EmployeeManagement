<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->date('date_admision');
            $table->string('name');
            $table->string('last_name');
            $table->date('birthdate');
            $table->string('dni',8);
            $table->string('email');
            $table->string('phone',9);
            
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('country_birth_id')->default(1);
            $table->unsignedBigInteger('country_domicile_id')->default(1);
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('district_id')->nullable();
            $table->string('address',120)->default('Por Definir');
            $table->string('own_home',120)->default('Por defidnir');
            $table->unsignedBigInteger('degree_instruction_id');
            $table->string('profession',180);
            $table->integer('children');

            $table->foreign('country_birth_id')
            ->references('id')
            ->on('countries');  
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');
            $table->foreign('district_id')
                ->references('id')
                ->on('districts');
            $table->foreign('degree_instruction_id')
                ->references('id')
                ->on('degrees_instruction');
            $table->foreign('country_domicile_id')
                ->references('id')
                ->on('countries');      
              


            
            $table->binary('photo')->nullable();
            $table->timestamps();
            $table->foreign('status_id')
                ->references('id')
                ->on('civil_status');
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
            });
          

            DB::statement('ALTER TABLE employees MODIFY photo LONGBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
