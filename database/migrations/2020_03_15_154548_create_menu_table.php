<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigInteger('id_menu')->length(5)->unsigned();
            $table->string('nm_menu')->length(20);
            $table->integer('harga_menu')->length(10);
            $table->string('kategori')->length(10);
            $table->timestamps();
            $table->primary('id_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
