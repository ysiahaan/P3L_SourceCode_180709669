<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->timestamps();
            $table->string('id_pegawai')->primary();
            $table->integer('role_id');
            $table->integer('jadwal_id');
            $table->string('nama_pegawai');
            $table->biginteger('telp_pegawai');
            $table->integer('jk_pegawai');
            $table->string('alamat_pegawai');
            $table->integer('status_pegawai');
            $table->string('username_pegawai');
            $table->string('password_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
