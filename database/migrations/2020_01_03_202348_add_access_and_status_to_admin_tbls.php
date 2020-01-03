<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccessAndStatusToAdminTbls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admin_tbls', function (Blueprint $table) {
            $table->string('status_akses')->after('password');
            $table->string('status_admin')->after('status_akses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_tbls', function (Blueprint $table) {
            //
        });
    }
}
