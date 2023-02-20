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
        //
        Schema::create('conventions_communes', function (Blueprint $table) {
            // $table->primary('id_convention'); 
            // $table->primary('id_commune'); 

            $table->foreignId('id_convention')->references('id')->on('conventions')->constrained()->onDelete('cascade')->onUpdate('cascade')->string();
            $table->foreignId('id_commune')->references('id')->on('communes')->constrained()->onDelete('cascade')->onUpdate('cascade')->string();
            $table->primary(['id_convention','id_commune']);
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
        //
        Schema::dropIfExists('conventions_commune');
    }
};
