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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('convention_id')->references('id')
                  ->on('conventions')
                  ->constrained()
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->char('title', 255);
            $table->char('validationDate', 255);
            $table->char('budget', 255);
            $table->char('phase', 20);
            $table->integer('progress');
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
        Schema::dropIfExists('projects');
    }
};
