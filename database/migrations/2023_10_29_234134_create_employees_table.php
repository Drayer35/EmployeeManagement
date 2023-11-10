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
            $table->string('name');
            $table->string('paternal_surname');
            $table->string('maternal_surname');
            $table->string('country_birth')->nullable();
            $table->date('birthdate');
            $table->unsignedBigInteger('gender_id');
            $table->string('dni',8);
            $table->string('phone',9);
            $table->string('email');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('province_id');
            $table->string ('district',100);
            $table->string('address',120)->default('Dirección por Definir');
            $table->string('own_home',120)->default('Propiedad por defidnir');
            $table->unsignedBigInteger('degree_instruction_id');
            $table->string('profession',180);
            $table->integer('children');
            $table->binary('photo')->nullable();
            $table->binary('fingerprint_data')->nullable();
            $table->date('date_admission');
            $table->timestamps();
  
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');
            $table->foreign('degree_instruction_id')
                ->references('id')
                ->on('degrees_instruction');   
              
            $table->foreign('status_id')
                ->references('id')
                ->on('civil_status');
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
            });
            DB::statement('ALTER TABLE employees MODIFY photo LONGBLOB');
            DB::statement('ALTER TABLE employees MODIFY fingerprint_data LONGBLOB');
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
