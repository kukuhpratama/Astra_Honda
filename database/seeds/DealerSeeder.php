<?php

use Illuminate\Database\Seeder;
use App\Dealer;

class DealerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_dealer = [
            ['kode_dealer' => '16456', 'nama_dealer' => 'Astra Motor Kadrie Oening'],
            ['kode_dealer' => '16531', 'nama_dealer' => 'Astra Motor Ahmad Yani'],
            ['kode_dealer' => '16862', 'nama_dealer' => 'Astra Motor Agus Salim'],
            ['kode_dealer' => '6999', 'nama_dealer' => 'CV Plaza Motor'],
            ['kode_dealer' => '16455', 'nama_dealer' => 'PT Tunas Dwipa Matra - SMD'],
            ['kode_dealer' => '8632', 'nama_dealer' => 'Astra Motor Tenggarong'],
            ['kode_dealer' => '16643', 'nama_dealer' => 'CV Sempurna Jaya - Tenggarong'],
            ['kode_dealer' => '11205', 'nama_dealer' => 'Astra Motor Bontang'],
            ['kode_dealer' => '16454', 'nama_dealer' => 'Astra Motor Sangatta'],
            ['kode_dealer' => '16774', 'nama_dealer' => 'Sempurna Jaya Melak'],
            ['kode_dealer' => '16836', 'nama_dealer' => 'Astra Motor Wahau'],
            ['kode_dealer' => '13530', 'nama_dealer' => 'PT  Armada Tunas Jaya Abadi Sendawar '],
            ['kode_dealer' => '11209', 'nama_dealer' => 'PT Daya Anugerah Mandiri - SMD'],
            ['kode_dealer' => '11206', 'nama_dealer' => 'PT Nusantara Surya Sakti - SMD 1'],
            ['kode_dealer' => '16786', 'nama_dealer' => 'PT Nusantara Surya Sakti - SMD 2'],
            ['kode_dealer' => '11207', 'nama_dealer' => 'PT Tunas Dwipa Matra - TGR'],
            ['kode_dealer' => '11210', 'nama_dealer' => 'PT Daya Anugerah Mandiri - SGT'],
            ['kode_dealer' => '16787', 'nama_dealer' => 'PT Nusantara Surya Sakti - Sangatta'],
            ['kode_dealer' => '12994', 'nama_dealer' => 'PT Armada Tunas Jaya Abadi - TGR'],
            ['kode_dealer' => '10110', 'nama_dealer' => 'PT Nusantara Surya Sakti - MLN'],
        ];

        foreach($data_dealer as $item){
            Dealer::create($item);
        }


    }
}
