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
        Schema::create('teas_characteristics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tea_id');
            $table->unsignedBigInteger('characteristic_id');
            $table->timestamps();

            $table->foreign('tea_id')->references('id')->on('teas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teas_characteristics');
    }
};
