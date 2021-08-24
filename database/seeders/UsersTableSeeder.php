<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();
            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
        // admin desa
        for ($i=1; $i <= 256; $i++) { 
            # code...
            $role = Role::where('name', 'admin')->firstOrFail();
            User::create([
                'name'           => 'Admin',
                'email'          => 'desa'.$i.'@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
        // admin kecamatan
        $arr_kecamatan = [
            '1' => 'banjaranyar', '2' => 'banjarsari', '3' => 'baregbeg','4' => 'ciamis','5' => 'cidolog','6' => 'cihaurbeuti','7'=>'cijeungjing','8'=>'cikoneng','9'=>'cimaragas','10'=>'cipaku','11'=>'cisaga','12'=>'jatinagara','13'=>'kawali','14'=>'lakbok','15'=>'lumbung','16'=>'pamarican','17'=>'panawangan','18'=>'panjalu','19'=>'panumbangan','20'=>'purwadadi','21'=>'rajadesa','22'=>'rancah','23'=>'sadananya','24'=>'sindangkasih','25'=>'sukadana','26'=>'sukamantri','27'=>'tambaksari'
        ];
        for ($i=1; $i <= 27; $i++) { 
            # code...
            $role = Role::where('name', 'admin')->firstOrFail();
            User::create([
                'name'           => 'Admin',
                'email'          => $arr_kecamatan[$i].'@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
