<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_anggotas', function (Blueprint $table) {
            $table->string('kode_member')->primary();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('jk');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('kabkota');
            $table->integer('pos');
            $table->string('email');
            $table->bigInteger('telp');
            $table->string('photo');
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
        Schema::dropIfExists('tb_anggotas');
    }
}
