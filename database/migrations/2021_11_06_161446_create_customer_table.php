<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->timestamps();
            $table->string('id_customer');
            $table->string('nama_customer');
            $table->string('alamat_customer');
            $table->string('email_customer');
            $table->integer('jk_customer');
            $table->biginteger('telp_customer');
            $table->string('password_customer');
            $table->date('lahir_customer');
            $table->date('pendaftaran_customer');
            $table->text('alergi_customer');
            $table->integer('point_customer');
            $table->increments('nomor_customer');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
