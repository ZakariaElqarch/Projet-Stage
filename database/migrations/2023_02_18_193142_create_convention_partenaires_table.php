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
        Schema::create('convention_partenaires', function (Blueprint $table) {
            $table->foreignId('convID')
                ->constrained('conventions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('partID')
                ->constrained('partenaires')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->primary(['convID', 'partID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convention_partenaires');
    }
};
