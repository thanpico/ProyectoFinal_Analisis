<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Product;

class ProductTableSeeder extends Seeder
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

                'name' => 'Medias',
                'slug' => 'Medias_1',
                'description' => 'Esto es una prueba',
                'extract' => 'Medias tuanis',
                'price' => 4500.00,
                'image' => 'https://www.cristobalcolon.com/fullaccess/item4070foto17635.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2,
            ],
            [
                'name' => 'Medias Wow',
                'slug' => 'Medias_2',
                'description' => 'Esto es una prueba',
                'extract' => 'Medias mas tuanis',
                'price' => 4500.00,
                'image' => 'https://lh3.googleusercontent.com/proxy/Sx1tVy--WlGryCeuxtCP3N6S-nnd9iH_tteLNK1GBu9MejZ_Z-3o0Ef0528O_CyweJ8mZMIusFcS1e7tBJBgnQ5lZts50tcj6cndnVPSDrMEvDvij5Bh8WDp0U6jXqHIn5HX_v9Z5_a4pv8UyPlK76EEAYUaxSdtXFsrSYUBj9H1jahG_uBBiobNhYnWNiyEf4v3VUE',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2,
            ],

            
        );
        Product::insert($data);

    }
}