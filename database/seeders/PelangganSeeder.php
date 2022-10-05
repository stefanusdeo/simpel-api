<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'id_pelanggan' => 'PELANGGAN_1',
                'nama' => 'ANDI',
                'domisili' => 'JAK-UT',
                'jenis_kelamin' => 'PRIA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_2',
                'nama' => 'BUDI',
                'domisili' => 'JAK-BAR',
                'jenis_kelamin' => 'PRIA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_3',
                'nama' => 'JOHAN',
                'domisili' => 'JAK-SEL',
                'jenis_kelamin' => 'PRIA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_4',
                'nama' => 'SHINTA',
                'domisili' => 'JAK-TIM',
                'jenis_kelamin' => 'WANITA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_5',
                'nama' => 'ANTO',
                'domisili' => 'JAK-UT',
                'jenis_kelamin' => 'PRIA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_6',
                'nama' => 'BUJANG',
                'domisili' => 'JAK-BAR',
                'jenis_kelamin' => 'PRIA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_7',
                'nama' => 'JOWAN',
                'domisili' => 'JAK-SEL',
                'jenis_kelamin' => 'PRIA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_8',
                'nama' => 'SHINTIA',
                'domisili' => 'JAK-TIM',
                'jenis_kelamin' => 'WANITA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_9',
                'nama' => 'BUTET',
                'domisili' => 'JAK-BAR',
                'jenis_kelamin' => 'WANITA'
            ],
            [
                'id_pelanggan' => 'PELANGGAN_10',
                'nama' => 'JONNY',
                'domisili' => 'JAK-SEL',
                'jenis_kelamin' => 'WANITA'
            ],
        ];
        foreach ($data as $key) {
            DB::table('pelanggans')->insert($key);
        }
    }
}
