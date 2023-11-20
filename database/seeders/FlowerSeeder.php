<?php

namespace Database\Seeders;

use App\Models\Flower;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flower::insert([
            [
                'nama'=>'Bunga kamboja',
                'deskripsi'=>'bunga kamboja',
                'harga' => '15000',
                'stok'=>'50',
                'gambar'=>'kamboja.png'
            ],
            [
                'nama'=>'Bunga Dahlia',
                'deskripsi'=>'bunga Dahlia',
                'harga' => '50000',
                'stok'=>'10',
                'gambar'=>'Dahlia.png'
            ]
        ]);
    }
}
