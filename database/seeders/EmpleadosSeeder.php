<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleados = [
            [
                "id_empleado"=>1,
                "identificacion" => 10000,
                "nombre_completo" => "Andres castilla",
                "gustos" => "Chocolate, cereales, Pasteles",
                "disgustos" =>    "Cuero de pollo",
                "alergias" => "Ninguna"
            ],
            [
                "id_empleado"=>2,
                "identificacion" => 123456,
                "nombre_completo" => "Alejandra castrillon",
                "gustos" => "jugos naturales, cerveza, salpicon",
                "disgustos" =>    "Empanadas,pollo",
                "alergias" => "cebolla,zanahoria"
            ],
            [
                "id_empleado"=>3,
                "identificacion" => 456789,
                "nombre_completo" => "Sebastian arboleda",
                "gustos" => "Cerveza,Tortas",
                "disgustos" =>    "las grasas",
                "alergias" => "mani"
            ],
            [
                "id_empleado"=>4,
                "identificacion" => 123789,
                "nombre_completo" => "Nancy montes",
                "gustos" => "frutas,pollo asado, golosina",
                "disgustos" =>    "arepa de chocolo",
                "alergias" => "yuca"
            ],
            [
                "id_empleado"=>5,
                "identificacion" => 963852,
                "nombre_completo" => "Carmen cortez",
                "gustos" => "limonada de coco, ensaladas de fruta ",
                "disgustos" =>   "pollo asado y frito",
                "alergias" => "las grasas"
            ],
        ];

        foreach ($empleados as $empleado) {
            DB::table('empleados')->insert([
                "id_empleado" => $empleado['id_empleado'],
                "identificacion" => $empleado['identificacion'],
                "nombre_completo" => $empleado['nombre_completo'],
                "gustos" => $empleado['gustos'],
                "disgustos" => $empleado['disgustos'],
                "alergias"=> $empleado['alergias']
            ]);
        }
    }
}
