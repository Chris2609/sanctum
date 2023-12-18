<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombre' => "Huawei",
            'descripcion' => "No google",
            'cantidad' => 33
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aifon",
            'descripcion' => "No pobre",
            'cantidad' => 1
        ]);
    }
}
