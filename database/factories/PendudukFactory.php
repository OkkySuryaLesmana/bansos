<?php

namespace Database\Factories;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        return [
//
//            'nik' => $this->faker->unique->numerify('#########'),
//            'nama_lgkp' => $this->faker->name,
//            'jenis_klmin' => $this->faker->name,
//            'nama_lgkp' => $this->faker->name,
//            'nama_lgkp' => $this->faker->name,
//            jenis_klmin
////            'alamat' => $this->faker->Address()
//        ];


        return [

            'nik' => $this->faker->nik(),
            'nama_lgkp' => $this->faker->name,
            'tgl_lhr' => $this->faker->date(),
            'jenis_klmin' => $this->faker->numberBetween(1, 2),
            'tmpt_lhr' => $this->faker->name,
            'no_kk' => $this->faker->nik(),
            'no_prop' => $this->faker->numberBetween(1, 20),
            'no_kab' => $this->faker->numberBetween(1, 15),
            'no_kec' => $this->faker->numberBetween(1, 14),
            'no_kel' => $this->faker->numberBetween(1, 10),
            'no_rw' => $this->faker->numberBetween(1, 7),
            'no_rt' => $this->faker->numberBetween(1, 7),
            'kepala_keluarga' => $this->faker->name


//            'alamat' => $this->faker->Address()
        ];
    }
}
