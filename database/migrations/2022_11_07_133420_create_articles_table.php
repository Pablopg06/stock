<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->string('proveedor');
            $table->unsignedBigInteger('codigo');
            $table->string('foto');
            $table->string('filtro');
            $table->string('marca');
            $table->unsignedBigInteger('stock_ideal');
            $table->unsignedBigInteger('stock_minimo');
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('articles');
    }
};
