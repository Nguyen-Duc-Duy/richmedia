<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_service', function (Blueprint $table) {
            $table->foreign('id_cat')->references('id')->on('tbl_category');
        });
        Schema::table('tbl_item', function (Blueprint $table) {
            $table->foreign('id_service')->references('id')->on('tbl_service');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handle');
    }
}
