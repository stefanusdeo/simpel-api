<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_nota' => 'NOTA_1',
                'tgl' => '2018-01-01',
                'kode_pelanggan' => 'PELANGGAN_1',
                'pelanggan_id' => 1,
                'subtotal' => 50000
            ],
            [
                'id_nota' => 'NOTA_2',
                'tgl' => '2018-01-01',
                'kode_pelanggan' => 'PELANGGAN_2',
                'pelanggan_id' => 2,
                'subtotal' => 200000
            ],
            [
                'id_nota' => 'NOTA_3',
                'tgl' => '2018-01-01',
                'kode_pelanggan' => 'PELANGGAN_3',
                'pelanggan_id' => 3,
                'subtotal' => 430000
            ],
            [
                'id_nota' => 'NOTA_4',
                'tgl' => '2018-01-02',
                'kode_pelanggan' => 'PELANGGAN_7',
                'pelanggan_id' => 7,
                'subtotal' => 120000
            ],
            [
                'id_nota' => 'NOTA_5',
                'tgl' => '2018-01-02',
                'kode_pelanggan' => 'PELANGGAN_4',
                'pelanggan_id' => 4,
                'subtotal' => 70000
            ],
            [
                'id_nota' => 'NOTA_6',
                'tgl' => '2018-01-03',
                'kode_pelanggan' => 'PELANGGAN_8',
                'pelanggan_id' => 8,
                'subtotal' => 230000
            ],
            [
                'id_nota' => 'NOTA_7',
                'tgl' => '2018-01-03',
                'kode_pelanggan' => 'PELANGGAN_9',
                'pelanggan_id' => 9,
                'subtotal' => 390000
            ],
            [
                'id_nota' => 'NOTA_8',
                'tgl' => '2018-01-03',
                'kode_pelanggan' => 'PELANGGAN_5',
                'pelanggan_id' => 5,
                'subtotal' => 65000
            ],
            [
                'id_nota' => 'NOTA_9',
                'tgl' => '2018-01-04',
                'kode_pelanggan' => 'PELANGGAN_2',
                'pelanggan_id' => 2,
                'subtotal' => 40000
            ],
        ];

        foreach ($data as $key) {
            DB::table('penjualans')->insert($key);
        }
    }
}
