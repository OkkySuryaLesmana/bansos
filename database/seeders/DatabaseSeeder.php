<?php

namespace Database\Seeders;

use App\Models\Penduduk;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        Penduduk::factory(5)->create();

//        if(DB::table('users')->count() == 0){

        $penduduk = DB::table('penduduks')->get();
//        $indikator = DB::table('indikators')->get();

        foreach ($penduduk as $pen) {
            $total = 0;
            $data = array();

            for ($i = 1; $i <= 20; $i++) {
                $x = $faker->numberBetween($min = 1, $max = 4);
                $total = $total + $x;
                array_push($data, $x);
            }
            if ($total >= 20 && $total <= 30) {
                $status = 'Sangat Miskin';
            } elseif ($total >= 31 && $total <= 40) {
                $status = 'Miskin';
            } elseif ($total >= 41 && $total <= 50) {
                $status = 'Hampir Miskin';
            } elseif ($total >= 51 && $total <= 60) {
                $status = 'Rentan Miskin';
            } elseif ($total >= 51 && $total <= 60) {
                $status = 'Tidak Miskin';
            }
//            print $data;

            DB::table('angka_kemiskinans')->insert([

                'nik' => $pen->nik,
                'indikator1' => $data[0],
                'indikator2' => $data[1],
                'indikator3' => $data[2],
                'indikator4' => $data[3],
                'indikator5' => $data[4],
                'indikator6' => $data[5],
                'indikator7' => $data[6],
                'indikator8' => $data[7],
                'indikator9' => $data[8],
                'indikator10' => $data[9],
                'indikator11' => $data[10],
                'indikator12' => $data[11],
                'indikator13' => $data[12],
                'indikator14' => $data[13],
                'indikator15' => $data[14],
                'indikator16' => $data[15],
                'indikator17' => $data[16],
                'indikator18' => $data[17],
                'indikator19' => $data[18],
                'indikator20' => $data[19],
                'total_nilai' => $total,
                'status' => $status,

            ]);
        }

    }
}
