<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblofficevisit', function (Blueprint $table) {
            $table->string('officeVisitID')->primary();
            $table->string('visitID')->references('visitID')->on('tblCampusVisit');
            $table->string('officeID')->references('officeID')->on('tblOfficeVisit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblofficevisit');
    }
}
