<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengguna_id')->unsigned();
            $table->bigInteger('pengusaha_id')->unsigned();
            $table->bigInteger('produk_id')->unsigned();
            $table->dateTime('tanggal_pesanan');
            $table->dateTime('tanggal_diambil')->nullable();
            $table->integer('jumlah');
            $table->decimal('total_harga',20,2);
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
        Schema::dropIfExists('pesanan');
    }
}
