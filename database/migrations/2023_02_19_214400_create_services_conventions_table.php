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
        Schema::create('services_conventions', function (Blueprint $table) {
            
            $table->foreignId('id_convention')->references('id')->on('conventions')->constrained()->onDelete('cascade')->onUpdate('cascade')->string();
            $table->foreignId('id_service')->references('id')->on('services')->constrained()->onDelete('cascade')->onUpdate('cascade')->string();
            $table->primary(['id_convention','id_service']);
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
        Schema::dropIfExists('services_conventions');
    }
};
