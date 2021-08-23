<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use Faker\Factory as Faker;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        // user kecamatan 27
        Users::factory(27)->create();
        // user desa 256
        Users::factory(256)->create();

        $penduduk = DB::table('admins')->get();
    }
}
