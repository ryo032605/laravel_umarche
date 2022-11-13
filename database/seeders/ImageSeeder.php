<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id'=>1,
                'filename' =>'sample1.jpg',
                'title'=> null
            ],
            [
                'owner_id'=>1,
                'filename' =>'sample1.jpg',
                'title'=> null
            ],
            [
                'owner_id'=>1,
                'filename' =>'sample1.jpg',
                'title'=> null
            ],
            [
                'owner_id'=>1,
                'filename' =>'sample1.jpg',
                'title'=> null
            ],
            [
                'owner_id'=>1,
                'filename' =>'sample1.jpg',
                'title'=> null
            ],
            [
                'owner_id'=>1,
                'filename' =>'sample1.jpg',
                'title'=> null
            ],
        ]);
    }
}
