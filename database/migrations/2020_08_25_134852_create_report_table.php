<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jumlah_rumah_tetap', 10);
            $table->string('jumlah_rumah_kontrak', 10); 
            $table->string('jumlah_anak', 10);
            $table->string('jumlah_tempat_sampah', 10);
            $table->string('jumlah_biopori', 10);
            $table->string('jumlah_anggota_bs', 10);
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
        Schema::dropIfExists('report');
    }
}
