<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigInteger('id_transaksi')->length(5)->unsigned();
            $table->integer('nomor_meja')->length(5);
            $table->integer('total_harga')->length(10);
            $table->enum('status', ['menunggu', 'selesai']);
            $table->timestamps();
            $table->primary('id_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}