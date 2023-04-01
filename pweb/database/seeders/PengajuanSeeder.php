<?php

namespace Database\Seeders;

use App\Models\Pengajuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengajuan::create([
            "id" => '1',
            "nama_pengaju" => 'yudis',
            "alamat" => 'Pemalang',
            "no_hp" => '083456235463',
            "keterangan" => 'Ambulans',
            "tanggal" => '2023-03-31'
        ]);
    }
}
