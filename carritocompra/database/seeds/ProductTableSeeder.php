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
        $product = new \App\Product([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Muy Divertido - Lectura para todas las edades',
            'price' => 7500
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://d202m5krfqbpi5.cloudfront.net/books/1360250509l/13633674.jpg',
            'title' => 'Tormenta de Espadas',
            'description' => 'Nadie sobrevivira',
            'price' => 12000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://imagessl7.casadellibro.com/a/l/t0/87/9788445000687.jpg',
            'title' => 'El retorno del rey',
            'description' => 'La conclusion a la epica aventura',
            'price' => 10000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://4.bp.blogspot.com/-RfUNZ7b0q3k/UCLTqtxK3GI/AAAAAAAAAPE/9XWUkIdHWNg/s1600/juego+de+tronos.jpg',
            'title' => 'Juego de Tronos',
            'description' => 'El conflicto de los reinos comienza',
            'price' => 12000
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.porrua.mx/blog/wp-content/uploads/2012/06/a2.jpg',
            'title' => 'Festin de Cuervos',
            'description' => 'La guerra de los cinco reyes decae',
            'price' => 12000
        ]);
        $product->save();

    }
}
