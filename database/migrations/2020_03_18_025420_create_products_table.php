<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            //CREAMOS ESQUEMAS DE BASE DE DATOS 
            $table->string('name',255);
            $table->string('slug');
            $table->text('description');
            $table->string('extract',300);
            $table->integer('price');
            $table->string('image',300);
            $table->boolean('visible');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');
            $table->timestamps();
            //$table->timestamps();     CREA LO QUE ES CREATED_AT Y UPDATE_AT
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
