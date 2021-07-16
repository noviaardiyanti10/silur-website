<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->int('id_user');
            $table->int('id_role');
            $table->string('nama_lengkap');
            $table->string('nama_usaha');
            $table->string('nomor_telp');
            $table->string('email')->unique();
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->string('username')->unique();
            $table->string('password'); 


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
        Schema::dropIfExists('penggunas');
    }
}
