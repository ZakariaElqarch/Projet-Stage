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
        Schema::create('partenaires_conventions', function (Blueprint $table) {
            $table->foreignId('id_convention')->references('id')->on('conventions')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_partenaire')->references('id')->on('partenaires')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['id_convention','id_partenaire']);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('convention_partenaires');
    }
    
};
