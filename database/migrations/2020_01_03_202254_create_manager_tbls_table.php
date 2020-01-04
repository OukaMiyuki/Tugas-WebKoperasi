<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('manager_tbls');
        Schema::create('manager_tbls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_manager');
            $table->string('uername');
            $table->string('password');
            $table->string('status_akses');
            $table->string('status_manager');
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
        Schema::dropIfExists('manager_tbls');
    }
}
