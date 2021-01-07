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
        //
        DB::table('products')->insert([
            [
                'name' => 'ASUS VivBook F510UA FHD Laptop',
                'price' => '509.99',
                'old_price'=> '549,99',
                'description' => 'New 10” ASUS VivBook is perfect for all your daily tasks, giving you laptop performance with tablet portability, a stunning touchscreen, and the Windows and Office experience you know. From email, browsing, and home projects to unwinding with a favorite TV show, Surface Lingo is by your side wherever you are — with up to 9 hours1 of battery life, built-in HD cameras, hassle-free connectivity, and all the ports you need, including multi-tasking USB-C.',
                'category' => 'COMPUTERS',
                'gallery' => 'img/13.jpg',
                'tag_message'=> null,
                'tag_type'=> null,
                'tag_color'=> null
            ],
            [
                'name' => 'NEW Microsoft Surface Go',
                'price' => '799.99',
                'old_price'=> null,
                'description' => 'New 10” Surface Go is perfect for all your daily tasks, giving you laptop performance with tablet portability, a stunning touchscreen, and the Windows and Office experience you know. From email, browsing, and home projects to unwinding with a favorite TV show, Surface Lingo is by your side wherever you are — with up to 9 hours1 of battery life, built-in HD cameras, hassle-free connectivity, and all the ports you need, including multi-tasking USB-C.',
                'category' => 'COMPUTERS',
                'gallery' => 'img/27.jpg',
                'tag_message'=> 'Hot',
                'tag_type'=> 'corner_tag',
                'tag_color'=> 'red'
            ],
            [
                'name' => 'Samsung DX510',
                'price' => '249.99',
                'old_price'=> '324.99',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category' => 'DIGITAL CAMERAS',
                'gallery' => 'img/2.jpg', 
                'tag_message'=> 'Discount',
                'tag_type'=> 'flat_tag',
                'tag_color'=> 'green'
            ],
            [
                'name' => 'Samsung S11',
                'price' => '269.99',
                'old_price'=> null,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category' => 'MOBILE PHONES',
                'gallery' => 'img/18.jpg',
                'tag_message'=> null,
                'tag_type'=> null,
                'tag_color'=> null
            ],
            [
                'name' => 'Samsung External DVD',
                'price' => '39.99',
                'old_price'=> null,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category' => 'ACCESSORIES',
                'gallery' => 'img/7.jpg',
                'tag_message'=> 'Left 1 in stock',
                'tag_type'=> 'flat_tag',
                'tag_color'=> 'red'
            ]
        ]);
    }
}
