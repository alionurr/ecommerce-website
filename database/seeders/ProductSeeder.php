<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Watch 1',
                'price' => '100',
                'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
                'image' => 'assets/img/gallery/popular1.png',
                'amount' => '100',
            ],

            [
                'name' => 'Watch 2',
                'price' => '200',
                'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                'image' => 'assets/img/gallery/popular2.png',
                'amount' => '120',
            ],

            [
                'name' => 'Watch 3',
                'price' => '300',
                'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.',
                'image' => 'assets/img/gallery/popular3.png',
                'amount' => '90',
            ],

            [
                'name' => 'Watch 4',
                'price' => '400',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'image' => 'assets/img/gallery/popular4.png',
                'amount' => '80',
            ],

            [
                'name' => 'Watch 5',
                'price' => '500',
                'description' => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.',
                'image' => 'assets/img/gallery/popular5.png',
                'amount' => '110',
            ],

            [
                'name' => 'Watch 6',
                'price' => '600',
                'description' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.',
                'image' => 'assets/img/gallery/popular6.png',
                'amount' => '95',
            ],
        ]);
    }
}
