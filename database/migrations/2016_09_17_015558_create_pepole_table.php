<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePepoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('People',function(Blueprint $table){
            $table->increments('id');
            $table->string('code',7);
            $table->integer('oc_id');
            $table->string('name');
            $table->string('furigana');
            $table->string('school_name')->nullable();
            $table->integer('taiken1')->nullable();
            $table->integer('taiken2')->nullable();
            $table->integer('taiken3')->nullable();
            $table->boolean('entry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('People');
    }
}
