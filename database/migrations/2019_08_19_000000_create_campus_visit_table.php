<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcampusvisit', function (Blueprint $table) {
            $table->string('visitID')->primary();
            $table->string('visitName');
            $table->string('visitContact');
            $table->string('visitVehicleType');
            $table->string('visitPlateNum');
            $table->dateTime('visitDate');
            $table->dateTime('visitTimeIn');
            $table->dateTime('visitTimeOut')->nullable();
            $table->string('visitStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcampusvisit');
    }
}
