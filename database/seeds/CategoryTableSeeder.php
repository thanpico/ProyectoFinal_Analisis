<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Super heroes',
                'slug' => 'super heroes',
                'description' => 'Esto es una prueba',
                'color' => '#ABEBC6'
            ],
            [
                'name' => 'Medias',
                'slug' => 'Super Medias',
                'description' => 'Esto es una prueba',
                'color' => '#A2D9CE'
            ],


        );
        Category::insert($data);

    }
}