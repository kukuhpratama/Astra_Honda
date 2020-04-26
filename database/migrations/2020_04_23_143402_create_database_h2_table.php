<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseH2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_h2', function (Blueprint $table) {
            $table->bigIncrements('id_database_h2');
            $table->unsignedBigInteger('id_dealer')->nullable();	
            $table->string(Str::snake('Nomor'),255)->nullable();
            $table->string('nomor_nama_AHASS',255)->nullable();
            // $table->string(Str::snake('Kode Dealer'),50)->nullable();	
            $table->string(Str::snake('Nomor Nota Servis'),255)->nullable();
            $table->dateTime(Str::snake('Tgl Nota Servis'),0)->nullable();
            $table->string('no_PKB',255)->nullable();
            $table->string(Str::snake('No Antrian'),255)->nullable();
            $table->string(Str::snake('Nama Tipe Kedatangan'),255)->nullable();
            $table->string(Str::snake('Alasan Ingat Service'),255)->nullable();
            $table->string(Str::snake('Dealer Sendiri'),255)->nullable();
            $table->string(Str::snake('No Polisi'),255)->nullable();
            $table->string(Str::snake('Nomor Mesin'),255)->nullable();
            $table->string(Str::snake('Nomor Rangka'),255)->nullable();
            $table->string(Str::snake('Nama Motor'),255)->nullable();
            $table->string(Str::snake('Warna'),255)->nullable();
            $table->string(Str::snake('Tahun Rakit'),255)->nullable();
            $table->string(Str::snake('Nama Pemilik'),255)->nullable();
            $table->string(Str::snake('Alamat'),255)->nullable();
            $table->string(Str::snake('Kelurahan'),255)->nullable();
            $table->string(Str::snake('Kecamatan'),255)->nullable();
            $table->string(Str::snake('Kabupaten'),255)->nullable();
            $table->string(Str::snake('No Telp'),255)->nullable();
            $table->string('no_HP',255)->nullable();
            $table->integer(Str::snake('Km Sekarang'))->nullable();
            $table->integer(Str::snake('Km Berikut'))->nullable();
            $table->string(Str::snake('Jenis'),255)->nullable();
            $table->string(Str::snake('Kode Jasa Part'),255)->nullable();
            $table->string(Str::snake('Grup Jasa Part'),255)->nullable();
            $table->string(Str::snake('Nama Jasa Part'),255)->nullable();
            $table->string(Str::snake('Satuan'),255)->nullable();
            $table->integer(Str::snake('Jumlah'))->nullable();
            $table->integer(Str::snake('Harga'))->nullable();
            $table->integer(Str::snake('Total'))->nullable();
            $table->string(Str::snake('Tipe Pembayaran'),255)->nullable();
            $table->string(Str::snake('Nama Mekanik'),255)->nullable();
            $table->string(Str::snake('User Login'),255)->nullable();
            $table->integer(Str::snake('Uang Bayar'))->nullable();
            $table->timestamps();

            $table->foreign('id_dealer')->references('id_dealer')->on('dealers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('database_h2');
    }
}
