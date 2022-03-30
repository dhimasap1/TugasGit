<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRumahSakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rumah_sakit', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rs', 255);
            $table->string('alamat', 255);
            $table->string('email', 255);
            $table->string('telp', 255);
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
        Schema::dropIfExists('data_rumah_sakit');
    }
}
