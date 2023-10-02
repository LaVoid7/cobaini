<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class financeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('finances')->insert([
            [
                'id' => '1',
                'tahun' => '2022',
                'deskripsi' => 1,
                'file' => 'Pekerjaan Pengadaan Manage Servise Operational Gudang Logee Di STO Kenjeran Surabaya',
            ],
        ]);
    }
}
