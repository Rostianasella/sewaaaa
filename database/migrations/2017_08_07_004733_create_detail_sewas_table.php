<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailSewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_sewas', function (Blueprint $table) {
            $table->increments('id');
            $table->int('id_sewa');
            $table->int('id_kamera');
            $table->date('tanggal_sewa');
            $table->varchar('nama');
            $table->varchar('jenis_kelamin');
            $table->text('alamat');
            $table->int('no_telepon');
            $table->int('no_ktp');
            $table->int('jumlah_harga');
            $table->int('harga_sewa');
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
        Schema::dropIfExists('detail_sewas');
    }
}
