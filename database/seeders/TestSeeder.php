<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::truncate();
       foreach(range(1,5) as $loop){
           Test::create([
               'apellido'=>"Apellido".$loop,
               'nombre'=>"Nombre".$loop,
               'edad'=>"33".$loop,
           ]);
       }
    }
}
