<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clothes')->insert([
        	'nama' => 'Hoodie',
        	'gambar' => 'GAP black premium hoodie.png',
        ]);

        DB::table('clothes')->insert([
        	'nama' => 'Jacket',
        	'gambar' => '2ND ARMORED DIVSION 3-SEASON JACKET.png',
        ]);

        DB::table('clothes')->insert([
        	'nama' => 'Jean',
        	'gambar' => 'CARDINAL TROUSER.png',
        ]);

        DB::table('clothes')->insert([
            'nama' => 'Sweater',
        	'gambar' => 'Grey Knit sweater.png',
        ]);

        DB::table('clothes')->insert([
            'nama' => 'T-Shirt',
        	'gambar' => 'UNIQLO GUDETAMA WHITE TSHIRT.png',
        ]); 
    }
}
