<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('locality')->nullable();
            $table->string('gps')->nullable();
            $table->string('nfogos')->nullable();
            $table->string('nfloors')->nullable();
            $table->string('in_itur')->nullable();
            $table->string('type')->nullable();
            $table->string('path_image')->nullable();
            $table->integer('installer_id')->unsigned()->nullable();
            $table->foreign('installer_id')->references('id')->on('installers')->onDelete('cascade');
            $table->integer('designer_id')->unsigned()->nullable();
            $table->foreign('designer_id')->references('id')->on('designers')->onDelete('cascade');
            $table->integer('owner_id')->unsigned()->nullable();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            $table->integer('technician_id')->unsigned()->nullable();
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('cascade');
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
        Schema::dropIfExists('buildings');
    }
}
