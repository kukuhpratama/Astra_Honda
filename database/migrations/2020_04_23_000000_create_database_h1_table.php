<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabaseH1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database_h1', function (Blueprint $table) {
            $table->bigIncrements('id_database_h1');
            $table->unsignedBigInteger('id_dealer')->nullable();	
            $table->string(Str::snake('No Faktur'), 50)->nullable();	
            $table->string(Str::snake('No Rangka'),50)->nullable();
            $table->string(Str::snake('Kode Mesin'),50)->nullable();	
            $table->string(Str::snake('No Mesi'),50)->nullable();	
            $table->date(Str::snake('Tgl Cetak'))->nullable();	
            $table->date(Str::snake('Tgl Mohon'))->nullable();	
            $table->string(Str::snake('Nama'),50)->nullable();	
            $table->string(Str::snake('Alamat'),255)->nullable();	
            $table->string(Str::snake('Kel'),50)->nullable();	
            $table->string(Str::snake('Kec'),50)->nullable();	
            $table->string(Str::snake('Kode Kota'),50)->nullable();	
            $table->string(Str::snake('Kode Pos'),50)->nullable();	
            $table->string(Str::snake('Kode Prov'),50)->nullable();	
            $table->string(Str::snake('Cash Credit'),50)->nullable();	
            // $table->string(Str::snake('Kode Dealer'),50)->nullable();	
            $table->string('ktp_no',50)->nullable();	
            $table->string(Str::snake('Finance Company'),50)->nullable();	
            $table->string(Str::snake('Down Payment'),50)->nullable();	
            $table->string(Str::snake('Tenor'),50)->nullable();	
            $table->string(Str::snake('Email'),50)->nullable();	
            $table->string(Str::snake('Kode Msn'),50)->nullable();	
            $table->string(Str::snake('No Mesin2'),50)->nullable();	
            $table->string('no_ktp',50)->nullable();		
            $table->string(Str::snake('Jenis Sales	'),50)->nullable();	
            $table->string(Str::snake('Gender'),50)->nullable();	
            $table->date(Str::snake('Tgl Lahir'))->nullable();	
            $table->string(Str::snake('alamat3'),255)->nullable();		
            $table->string(Str::snake('Kel4'),50)->nullable();	
            $table->string(Str::snake('Kec 5'),50)->nullable();	
            $table->string(Str::snake('Kota Kab'),50)->nullable();	
            $table->string(Str::snake('Kode Pos6'),50)->nullable();		
            $table->string(Str::snake('Propinsi'),50)->nullable();	
            $table->string(Str::snake('Agama'),50)->nullable();	
            $table->string(Str::snake('Pekerjaan'),50)->nullable();	
            $table->string(Str::snake('Pengeluaran'),50)->nullable();	
            $table->string(Str::snake('Pendidikan'),50)->nullable();	
            $table->string('PIC',50)->nullable();	
            $table->string('no_hp',50)->nullable();	
            $table->string(Str::snake('No Telp'),50)->nullable();	
            $table->string('dihubungi',50)->nullable();	
            $table->string(Str::snake('Merk'),50)->nullable();	
            $table->string(Str::snake('Jenis'),50)->nullable();	
            $table->string(Str::snake('Fungsi'),50)->nullable();	
            $table->string(Str::snake('Pemakai'),50)->nullable();	
            $table->string(Str::snake('SalesPerson'),50)->nullable();	
            $table->string(Str::snake('Umur'),50)->nullable();	
            $table->string(Str::snake('Range Umur'),50)->nullable();
            $table->string(Str::snake('Region'),50)->nullable();		
            $table->string(Str::snake('Tipe'),50)->nullable();	
            $table->string(Str::snake('6Jenis'),50)->nullable();	
            $table->string(Str::snake('3Jenis'),50)->nullable();	
            $table->string(Str::snake('Verify Flag'),50)->nullable();	
            $table->string(Str::snake('Verify Date'),50)->nullable();	
            $table->string(Str::snake('Buyer Name'),50)->nullable();	 
            $table->string(Str::snake('Buyer Address'),50)->nullable();	
            $table->string(Str::snake('Buyer Kelurahan'),50)->nullable();	
            $table->string(Str::snake('Buyer Kecamatan'),50)->nullable();	
            $table->string(Str::snake('Flag Update No HP'),50)->nullable();	
            $table->string(Str::snake('Flag Update Tgl Lahir'),50)->nullable();	
            $table->string(Str::snake('Flag Update Agama'),50)->nullable();	  
            $table->string(Str::snake('Flag Update Pekerjaan'),50)->nullable();	
            $table->string(Str::snake('Flag Update Cash Credit'),50)->nullable();	
            $table->string(Str::snake('Flag Update Fin'),50)->nullable();	
            $table->string(Str::snake('Email 2'),50)->nullable();	
            $table->string(Str::snake('Status Rumah'),50)->nullable();	
            $table->string(Str::snake('Status Handphone'),50)->nullable();	
            $table->string(Str::snake('Status Verifikasi'),50)->nullable();	
            $table->string('DP_aktual',50)->nullable();	
            $table->string(Str::snake('Tenor 2'),50)->nullable();	
            $table->string(Str::snake('Cicilan'),50)->nullable();	
            $table->string('tipe_ATPM',50)->nullable();	
            $table->string(Str::snake('Warna'),50)->nullable();	  
            $table->string(Str::snake('Tipe Var Plus'),50)->nullable();	
            $table->string(Str::snake('Cust No'),50)->nullable();	
            $table->string('RO_type',50)->nullable();	
            $table->string('RO_data',50)->nullable();	
            $table->string(Str::snake('Member No'),50)->nullable();	
            $table->string(Str::snake('Facebook'),50)->nullable();	
            $table->string(Str::snake('Twitter'),50)->nullable();	
            $table->string(Str::snake('Instagram'),50)->nullable();	
            $table->string(Str::snake('Youtube'),50)->nullable();	
            $table->string(Str::snake('Hobi'),50)->nullable();	
            $table->string(Str::snake('Remark'),50)->nullable();	
            $table->string('Referall_ID',50)->nullable();	
            $table->string('flag_DP',50)->nullable();	
            $table->string(Str::snake('Flag Tenor'),50)->nullable();	
            $table->string(Str::snake('Flag Cicilan'),50)->nullable();	
            $table->string(Str::snake('Flag Email'),50)->nullable();	
            $table->string(Str::snake('Flag Hobi'),50)->nullable();	
            $table->string(Str::snake('Flag Keterangan'),50)->nullable();	
            $table->string('W',50)->nullable();	
            $table->string('no_KK',50)->nullable();	
            $table->string(Str::snake('Reference'),50)->nullable();	
            $table->string('RO_by_desi',50)->nullable();	
            $table->string(Str::snake('Tempat Lahir'),50)->nullable();	
            $table->string(Str::snake('Nama Instansi'),50)->nullable();	  
            $table->string(Str::snake('Alamat Instansi'),255)->nullable();	
            $table->string(Str::snake('Kecamatan Instansi'),50)->nullable();	
            $table->string(Str::snake('Kota Instansi'),50)->nullable();	  
            $table->string(Str::snake('Propinsi Instansi'),50)->nullable();	
            $table->string(Str::snake('Aktifitas Penjualan'),50)->nullable();
            $table->string(Str::snake('Kode Pekerjaan 2'),50)->nullable();
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
        Schema::dropIfExists('database_h1');
    }
}
