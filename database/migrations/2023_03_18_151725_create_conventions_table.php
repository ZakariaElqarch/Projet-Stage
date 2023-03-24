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
        Schema::create('conventions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_service')->references('id')->on('services')->constrained()->onDelete('cascade')->onUpdate('cascade')->string();
            $table->foreignId('id_division')->references('id')->on('divisions')->constrained()->onDelete('cascade')->onUpdate('cascade')->string();
            $table->string('title', 255);
            $table->string('validity');
            $table->string('budget', 1000);
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
        Schema::dropIfExists('conventions');
    }
};
