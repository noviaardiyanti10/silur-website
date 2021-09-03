<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->after('harga');
            $table->bigInteger('kategori_id')->unsigned()->after('deskripsi');
            $table->string('foto')->nullable()->after('kategori_id');
            
            $table->foreign('kategori_id')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->dropColumn('deskripsi');
            $table->dropColumn('kategori_id');
            $table->dropColumn('foto');
        });
    }
}
