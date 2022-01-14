<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->date('open_time');
            $table->date('close_time');
            $table->string('note');
            $table->unsignedBigInteger('price');
            $table->string('prepare_time');
            $table->string('discount_code');
            $table->integer('seen_time');
            $table->integer('order_time');
            $table->date('date_create');
            $table->date('date_edit');
            $table->string('restaurant');
            $table->integer('discount_time');
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
        Schema::dropIfExists('foods');
    }
}
