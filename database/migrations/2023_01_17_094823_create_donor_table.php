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
        Schema::create('donor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donor_name')->nullable();
            $table->foreignId('blood_group_id')->nullable()->unsigned();
            $table->string('gender')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('city_id')->nullable()->unsigned();
            $table->string('image')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donor');
    }
};
