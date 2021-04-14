<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('showcase')->insert([
            [
                'image' => 'assets/img/gallery/gallery1.png',
            ],
            [
                'image' => 'assets/img/gallery/gallery2.png',
            ],
            [
                'image' => 'assets/img/gallery/gallery3.png',
            ],
            [
                'image' => 'assets/img/gallery/gallery4.png',
            ],
        ]);
    }
}
