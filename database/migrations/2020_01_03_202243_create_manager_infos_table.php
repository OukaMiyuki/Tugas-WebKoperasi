<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('manager_infos');
        Schema::create('manager_infos', function (Blueprint $table) {
            $table->string('kode_manager')->primary();
            $table->bigInteger('nik');
            $table->string('nama_manager');
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
        Schema::dropIfExists('manager_infos');
    }
}
