<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('dni',8)->unique();
            $table->string('email')->unique();
            $table->string('phone',9)->unique();
            $table->string('profession',180);
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('province_id');
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->foreign('status_id')
                ->references('id')
                ->on('civil_status');
            
            $table->foreign('gender_id')
                ->references('id')
                ->on('genders');
            
            $table->foreign('department_id')
                ->references('id')
                ->on('departments');

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces');
            });
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
