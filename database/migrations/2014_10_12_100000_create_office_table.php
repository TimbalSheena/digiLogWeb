<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbloffice', function (Blueprint $table) {
            $table->string('officeID')->primary();
            $table->string('officeName');
            $table->integer('officeBuildingNum');
            $table->string('officePassword');
            $table->string('officeStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbloffice');
    }
}
