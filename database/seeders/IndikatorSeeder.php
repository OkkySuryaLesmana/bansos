<?php

namespace Database\Seeders;

use App\Models\Indikator;
use Illuminate\Database\Seeder;

class IndikatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indikator::create([
            'id'=>1,
            'nama_indikator' => 'Jumlah Anggota Keluarga'
        ]);
        Indikator::create([
            'id'=>2,
            'nama_indikator' => 'Jumlah Anggota Keluarga Masih Sekolah'
        ]);
        Indikator::create([
            'id'=>3,
            'nama_indikator' => 'Jumlah Anggota Keluarga Bekerja'
        ]);
        Indikator::create([
            'id'=>4,
            'nama_indikator' => 'Jumlah KK 1 Rumah'
        ]);
        Indikator::create([
            'id'=>5,
            'nama_indikator' => 'Status Kepemilikan Rumah'
        ]);
        Indikator::create([
            'id'=>6,
            'nama_indikator' => 'Luas Lantai Bangunan'
        ]);
        Indikator::create([
            'id'=>7,
            'nama_indikator' => 'Material Atap'
        ]);
        Indikator::create([
            'id'=>8,
            'nama_indikator' => 'Material Lantai'
        ]);
        Indikator::create([
            'id'=>9,
            'nama_indikator' => 'Material Dinding'
        ]);
        Indikator::create([
            'id'=>10,
            'nama_indikator' => 'Sumber Air Bersih'
        ]);
        Indikator::create([
            'id'=>11,
            'nama_indikator' => 'Toilet (MCK)'
        ]);
        Indikator::create([
            'id'=>12,
            'nama_indikator' => 'Penerangan Rumah'
        ]);
        Indikator::create([
            'id'=>13,
            'nama_indikator' => 'Bahan Bakar Dapur'
        ]);
        Indikator::create([
            'id'=>14,
            'nama_indikator' => 'Perabotan Rumah'
        ]);
        Indikator::create([
            'id'=>15,
            'nama_indikator' => 'Transportasi'
        ]);
        Indikator::create([
            'id'=>16,
            'nama_indikator' => 'Pendidikan Kepala Keluarga'
        ]);
        Indikator::create([
            'id'=>17,
            'nama_indikator' => 'Pekerjaan Kepala Keluarga'
        ]);
        Indikator::create([
            'id'=>18,
            'nama_indikator' => 'Total Penghasilan Satu Keluarga'
        ]);
        Indikator::create([
            'id'=>19,
            'nama_indikator' => 'Keluarga yang Sakit Kronis/Menahun'
        ]);
        Indikator::create([
            'id'=>20,
            'nama_indikator' => 'Aset yang Dimiliki yang Bisa Dijual'
        ]);

    }
}
