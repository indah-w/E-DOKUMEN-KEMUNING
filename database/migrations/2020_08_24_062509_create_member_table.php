<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_kk', 30);
            $table->string('no_ktp', 30);
            $table->string('nama_kartu_keluarga', 30);
            $table->string('alamat', 50); 
            $table->string('no_telepon', 12);
            $table->string('status_rumah', 30);
            $table->string('jumlah_anak', 30);
            $table->string('memiliki_tempat_sampah', 5);
            $table->string('jumlah_biopori', 10);
            $table->string('anggota_bank_sampah', 5);
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
        Schema::dropIfExists('member');
    }
}
