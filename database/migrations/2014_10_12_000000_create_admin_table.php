<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbladmin', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('username');
            $table->string('adminName');
            $table->string('adminPassword');
        });
        $this_year = (int)date("Y");
        $for_id = $this_year * 10000;

        DB::update("ALTER TABLE tbladmin AUTO_INCREMENT = $for_id;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbladmin');
    }
}
