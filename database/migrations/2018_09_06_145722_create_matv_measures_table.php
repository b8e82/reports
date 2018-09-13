<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatvMeasuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matvMeasures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('building_id')->unsigned();
            $table->foreign('building_id')->references('id')->on('buildings')->onDelete('cascade');
            $table->string('tomada');
            $table->string('freq');
            $table->string('pwr');
            $table->string('mer');
            $table->string('vber');
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
        Schema::dropIfExists('matvMeasures');
    }
}
