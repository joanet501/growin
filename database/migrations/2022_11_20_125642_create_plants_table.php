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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('garden_id');
            $table->foreign('garden_id')->references('id')->on('gardens');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('plant_categories');
            $table->string('name')->nullable();
            $table->string('water_date')->nullable();
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
        Schema::dropIfExists('plants');
    }
};
