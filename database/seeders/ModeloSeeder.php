<?php

namespace Database\Seeders;

use App\Models\Modelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach(range(1,5) as $loop){
            Modelo::create([
                'campo1'=>"campo1".$loop,
                'campo2'=>"campo2".$loop,
            ]);
        }
    }
}
