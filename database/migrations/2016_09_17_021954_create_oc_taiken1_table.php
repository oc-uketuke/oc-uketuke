<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcTaiken1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Oc_Taiken1',function(Blueprint $table)
        {
            $table->integer('oc_id')->unsigned()->index();
            $table->foreign('oc_id')->references('id')->on('Opencanpass')->onDelete('cascade');

            $table->integer('taiken_id')->unsigned()->index();
            $table->foreign('taiken_id')->references('id')->on('Taiken')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Oc_Taiken1');
    }
}
