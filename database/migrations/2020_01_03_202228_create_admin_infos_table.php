<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_infos', function (Blueprint $table) {
            $table->string('kode_admin')->primary();
            $table->bigInteger('nik');
            $table->string('nama_admin');
            $table->string('jk');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('kabkota');
            $table->string('pos');
            $table->string('email');
            $table->string('telp');
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
        Schema::dropIfExists('admin_infos');
    }
}
