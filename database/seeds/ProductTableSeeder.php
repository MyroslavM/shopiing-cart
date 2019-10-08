<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product =new \App\Product([
            'imagePath' => 'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1502818159l/35791968.jpg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'price' => '85'
        ]);
        $product ->save();


        $product =new \App\Product([
            'imagePath' => 'https://amp.businessinsider.com/images/5b2c03ae1ae6621d008b54fe-750-563.jpg',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'price' => '72'
        ]);
        $product ->save();


        $product =new \App\Product([
            'imagePath' => 'https://cdn-image.realsimple.com/sites/default/files/styles/medium_2x/public/the-dreamers-best-books-2019.jpg?itok=-HKgMTJj&1544650345',
            'title' => 'Harry Potter',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
            'price' => '25'
        ]);
        $product ->save();
    }
}
