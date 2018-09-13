<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fraction_id')->unsigned();
            $table->foreign('fraction_id')->references('id')->on('fractions')->onDelete('cascade');
            $table->string('fibra');
            $table->string('atiate1310')->nullable();
            $table->string('atiate1550')->nullable();
            $table->string('ateati1310')->nullable();
            $table->string('ateati1550')->nullable();
            $table->string('atizap1310')->nullable();
            $table->string('atizap1550')->nullable();
            $table->string('zapati1310')->nullable();
            $table->string('zapati1550')->nullable();
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
        Schema::dropIfExists('measurements');
    }
}
