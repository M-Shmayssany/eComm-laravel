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
                'name' => 'Samsoung Mobile',
                'price' => '300',
                'description' => 'A smartphone with 32gb ram oled screen',
                'category' => 'Mobile',
                'gallery' => 'https://www.91-img.com/pictures/135779-v4-samsung-galaxy-a20s-mobile-phone-large-1.jpg'
            ],
            [
                'name' => 'Oppo Mobile',
                'price' => '300',
                'description' => 'A smartphone with 32gb ram oled screen',
                'category' => 'Mobile',
                'gallery' => 'https://cdn1.smartprix.com/rx-iKDqwE5n7-w1200-h1200/oppo-k5-8gb-ram-256g.jpg'
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '399',
                'description' => 'A smart tv with oled screen 42"',
                'category' => 'TV',
                'gallery' => 'https://media.krefel.be/sys-master/products/8897971421214/570x450.31001786_1.jpg'
            ],
            [
                'name' => 'Sony TV',
                'price' => '899',
                'description' => 'A smart tv with oled screen 65"',
                'category' => 'TV',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0984/6864/products/Knipsel.JPG1_82293c69-a331-434d-9c97-d2929d9f4995_1024x1024@2x.jpg?v=1602947124'
            ],
            [
                'name' => 'LG fridge',
                'price' => '1499',
                'description' => 'A smart fridge with two doors',
                'category' => 'Fridge',
                'gallery' => 'https://assets.mmsrg.com/isr/166325/c1/-/pixelboxx-mss-76272601/fee_325_225_png/LG-Amerikaanse-koelkast-A--%28GSJ461DIDV%29'
            ]
        ]);
    }
}
