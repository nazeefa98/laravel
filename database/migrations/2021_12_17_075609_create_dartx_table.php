<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDartxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dartx', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('description');
            $table->string('colour');
            $table->string('size');
            $table->string('group_name');
            $table->integer('bar_code');
            $table->integer('in_stock');
            $table->integer('b2c');
            $table->integer('sale');
            $table->integer('brand');


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
        Schema::dropIfExists('dartx');
    }
}
