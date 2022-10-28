<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logins = [
            [
                "id_login"=>1,
                "id_empleado_fk" => 1,
                "identificacion" => 10000,
                "clave" => "10000123"
            ],
            [
                "id_login"=>2,
                "id_empleado_fk" => 2,
                "identificacion" => 123456,
                "clave" => "123456123"
            ],
            [
                "id_login"=>3,
                "id_empleado_fk" => 3,
                "identificacion" => 456789,
                "clave" => "456789123"
            ],
            [
                "id_login"=>4,
                "id_empleado_fk" => 4,
                "identificacion" => 123789,
                "clave" => "123789123"
            ],
            [
                "id_login"=>5,
                "id_empleado_fk" => 5,
                "identificacion" => 963852,
                "clave" => "963852123"
            ],
        ];
        foreach ($logins as $login) {
            DB::table('logins')->insert([
                "id_login" => $login['id_login'],
                "id_empleado_fk" => $login['id_empleado_fk'],
                "identificacion" => $login['identificacion'],
                "clave" => $login['clave']
            ]);
        }
    }
}
