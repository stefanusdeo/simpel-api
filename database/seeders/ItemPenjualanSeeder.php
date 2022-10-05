<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemPenjualanSeeder extends Seeder
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
                'nota' => 'NOTA_1',
                'nota_id' => 1,
                'kode_barang' => 'BRG_1',
                'barang_id' => 1,
                'qty' => 2
            ],
            [
                'nota' => 'NOTA_1',
                'nota_id' => 1,
                'kode_barang' => 'BRG_2',
                'barang_id' => 2,
                'qty' => 2
            ],
            [
                'nota' => 'NOTA_2',
                'nota_id' => 2,
                'kode_barang' => 'BRG_6',
                'barang_id' => 6,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_3',
                'nota_id' => 3,
                'kode_barang' => 'BRG_4',
                'barang_id' => 4,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_3',
                'nota_id' => 3,
                'kode_barang' => 'BRG_7',
                'barang_id' => 7,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_3',
                'nota_id' => 3,
                'kode_barang' => 'BRG_6',
                'barang_id' => 6,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_4',
                'nota_id' => 4,
                'kode_barang' => 'BRG_9',
                'barang_id' => 9,
                'qty' => 2
            ],
            [
                'nota' => 'NOTA_4',
                'nota_id' => 4,
                'kode_barang' => 'BRG_10',
                'barang_id' => 10,
                'qty' => 2
            ],
            [
                'nota' => 'NOTA_5',
                'nota_id' => 5,
                'kode_barang' => 'BRG_3',
                'barang_id' => 3,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_6',
                'nota_id' => 6,
                'kode_barang' => 'BRG_7',
                'barang_id' => 7,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_6',
                'nota_id' => 6,
                'kode_barang' => 'BRG_5',
                'barang_id' => 5,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_6',
                'nota_id' => 6,
                'kode_barang' => 'BRG_3',
                'barang_id' => 3,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_7',
                'nota_id' => 7,
                'kode_barang' => 'BRG_5',
                'barang_id' => 5,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_7',
                'nota_id' => 7,
                'kode_barang' => 'BRG_6',
                'barang_id' => 6,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_7',
                'nota_id' => 7,
                'kode_barang' => 'BRG_7',
                'barang_id' => 7,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_7',
                'nota_id' => 7,
                'kode_barang' => 'BRG_8',
                'barang_id' => 8,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_8',
                'nota_id' => 8,
                'kode_barang' => 'BRG_5',
                'barang_id' => 5,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_8',
                'nota_id' => 8,
                'kode_barang' => 'BRG_9',
                'barang_id' => 9,
                'qty' => 1
            ],
            [
                'nota' => 'NOTA_9',
                'nota_id' => 9,
                'kode_barang' => 'BRG_5',
                'barang_id' => 5,
                'qty' => 1
            ],
            // [
            //     'nota' => 'NOTA_10',
            //     'nota_id' => 10,
            //     'kode_barang' => 'BRG_5',
            //     'barang_id' => 5,
            //     'qty' => 10
            // ],
        ];

        foreach ($data as $key) {
            DB::table('item_penjualans')->insert($key);
        }
    }
}
