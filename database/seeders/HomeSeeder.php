<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $homes=[
            [
            'gambar'=>'images/1.jpg',
            'nama'=>'Outdoor'
            ],
            [   
            'gambar'=>'images/2.jpg',
            'nama'=>'Living Room'      
            ],
            [   
            'gambar'=>'images/3.jpg',
            'nama'=>'Bedroom Lighting'
            ]];

        DB::table('homes')->insert($homes);
    }
}
