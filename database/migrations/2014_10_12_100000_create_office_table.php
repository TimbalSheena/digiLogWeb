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
            $table->bigIncrements('officeID')->unsigned();
            $table->string('username');
            $table->string('officeName');
            $table->integer('officeBuildingNum');
            $table->string('officePassword');
            $table->string('officeStatus');
        });

        $this_year = (int)date("Y");
        $for_id = $this_year * 10000 + 5000;

        DB::update("ALTER TABLE tbloffice AUTO_INCREMENT = $for_id;");
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
