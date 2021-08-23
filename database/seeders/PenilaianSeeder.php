<?php

namespace Database\Seeders;

use App\Models\Penilaian;
use Illuminate\Database\Seeder;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penilaian::create([
            'indikator_id'=>1,
            'nama' => '>6 orang atau 1 orang lanjut usia sebatang kara',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>1,
            'nama' => '5 orang',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>1,
            'nama' => '4 orang',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>1,
            'nama' => '1-3 orang',
            'nilai' => 4
        ]);

//        2
        Penilaian::create([
            'indikator_id'=>2,
            'nama' => '>3 orang',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>2,
            'nama' => '2-3 orang',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>2,
            'nama' => '1 orang',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>2,
            'nama' => '0 orang',
            'nilai' => 4
        ]);
//        3
        Penilaian::create([
            'indikator_id'=>3,
            'nama' => '>0 orang',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>3,
            'nama' => '1 orang',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>3,
            'nama' => '2-3 orang',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>3,
            'nama' => '>3 orang',
            'nilai' => 4
        ]);
        //        4
        Penilaian::create([
            'indikator_id'=>4,
            'nama' => '>3 KK',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>4,
            'nama' => '3 KK',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>4,
            'nama' => '2 KK',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>4,
            'nama' => '>1 KK',
            'nilai' => 4
        ]);
//        5


        Penilaian::create([
            'indikator_id'=>5,
            'nama' => 'Milik Orang Tua',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>5,
            'nama' => 'Pinjaman Gratis',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>5,
            'nama' => 'Menyewa',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>5,
            'nama' => 'Milik Sendiri',
            'nilai' => 4
        ]);
//        6

        Penilaian::create([
            'indikator_id'=>6,
            'nama' => '<50 M^2',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>6,
            'nama' => '50 M^2 s/d 75 m^2',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>6,
            'nama' => '>75 m^2 s/d 100 m^2',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>6,
            'nama' => '>100 m^2',
            'nilai' => 4
        ]);
//        7
        Penilaian::create([
            'indikator_id'=>7,
            'nama' => 'Bambu',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>7,
            'nama' => 'Kayu dengan Kualitas Jelek',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>7,
            'nama' => 'Kayu dengan Kualitas Sedang',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>7,
            'nama' => 'Kayu Jati/Baja Ringan',
            'nilai' => 4
        ]);
//        8
        Penilaian::create([
            'indikator_id'=>8,
            'nama' => 'Tanah',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>8,
            'nama' => 'Lantai Cor/Bata Merah',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>8,
            'nama' => 'Plester/Tegel',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>8,
            'nama' => 'Keramik',
            'nilai' => 4
        ]);
//        9
        Penilaian::create([
            'indikator_id'=>9,
            'nama' => 'Bambu',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>9,
            'nama' => 'Kayu Papan',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>9,
            'nama' => 'Tembok Lama/Kayu Jati',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>9,
            'nama' => 'Tembok Kualitas Baik',
            'nilai' => 4
        ]);
//        10
        Penilaian::create([
            'indikator_id'=>10,
            'nama' => 'Sumber Air Milik Umum',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>10,
            'nama' => 'Sumur Milik Umum',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>10,
            'nama' => 'Sumur Milik Sendiri',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>10,
            'nama' => 'PDAM/membeli Air Kemasan',
            'nilai' => 4
        ]);

//        11

        Penilaian::create([
            'indikator_id'=>11,
            'nama' => 'Umum',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>11,
            'nama' => 'Milik Sendiri Kondisi Jelek',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>11,
            'nama' => 'Milik Sendiri Kondisi Sedang',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>11,
            'nama' => 'Milik Sendiri Kondisi Baik',
            'nilai' => 4
        ]);

//        12
        Penilaian::create([
            'indikator_id'=>12,
            'nama' => 'Lampu Minyak',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>12,
            'nama' => 'Listrik Numpang',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>12,
            'nama' => 'PLN 450 Watt',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>12,
            'nama' => 'PLN 900 Watt',
            'nilai' => 4
        ]);

//        13
        Penilaian::create([
            'indikator_id'=>13,
            'nama' => 'Kayu Bakar',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>13,
            'nama' => 'Minyak Tanah',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>13,
            'nama' => 'Gas LPG 3 Kg',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>13,
            'nama' => 'Kas LPG 12 Kg',
            'nilai' => 4
        ]);
//        14
        Penilaian::create([
            'indikator_id'=>14,
            'nama' => 'Tidak Punya',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>14,
            'nama' => 'Televisi/Radio',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>14,
            'nama' => 'Kulkas/Handphone',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>14,
            'nama' => 'Mesin Cuci',
            'nilai' => 4
        ]);
//        15
        Penilaian::create([
            'indikator_id'=>15,
            'nama' => 'Jalan Kaki/Sepeda',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>15,
            'nama' => '1 buah sepeda motor',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>15,
            'nama' => 'KSepeda Motor>1',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>15,
            'nama' => 'Mobil',
            'nilai' => 4
        ]);

//        16

        Penilaian::create([
            'indikator_id'=>16,
            'nama' => 'Tidak sekolah/Tidak Tamat SD',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>16,
            'nama' => 'Tamat SD/sederajat',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>16,
            'nama' => 'Tamat SMP/sederajat',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>16,
            'nama' => 'Tamat SMA/SMK/Perguruan Tinggi',
            'nilai' => 4
        ]);
//17
        Penilaian::create([
            'indikator_id'=>17,
            'nama' => 'Buruh Tani',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>17,
            'nama' => 'Buruh Jasa',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>17,
            'nama' => 'Petani/Pedagang Kecil',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>17,
            'nama' => 'WiraUsaha/Pedagang Besar',
            'nilai' => 4
        ]);

//        18

        Penilaian::create([
            'indikator_id'=>18,
            'nama' => '<Rp.400.000',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>18,
            'nama' => 'Rp.400.000 s/d Rp.600.000',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>18,
            'nama' => 'Rp.>600.000 s/d Rp.1.000.000',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>18,
            'nama' => '>Rp.1.000.000 s/d Rp.1.300.000',
            'nilai' => 4
        ]);

//        19
        Penilaian::create([
            'indikator_id'=>19,
            'nama' => '>3 orang/1KK',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>19,
            'nama' => '2 orang/1 KK',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>19,
            'nama' => '1 orang/1 KK',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>19,
            'nama' => 'Tidak ada',
            'nilai' => 4
        ]);
//        20
        Penilaian::create([
            'indikator_id'=>20,
            'nama' => 'Tidak Punya',
            'nilai' => 1
        ]);
        Penilaian::create([
            'indikator_id'=>20,
            'nama' => '<Rp.1.000.000',
            'nilai' => 2
        ]);
        Penilaian::create([
            'indikator_id'=>20,
            'nama' => 'Rp.1.000.000 s/d Rp.5.000.000',
            'nilai' => 3
        ]);
        Penilaian::create([
            'indikator_id'=>20,
            'nama' => '>Rp.5.000.000',
            'nilai' => 4
        ]);
    }
}
