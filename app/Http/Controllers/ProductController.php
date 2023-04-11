<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = [[
            'id' => '1',
            'productName' => 'Kartu-1',
            'productDesc' => 'Ini adalah kartu paling tua dengan level rarity Rare',
            'rarity' => '1',
            'price' => 50000
        ],
        [
            'id' => '2',
            'productName' => 'Kartu-2',
            'productDesc' => 'Ini adalah kartu paling tua kedua dengan level rarity Super Rare',
            'rarity' => '2',
            'price' => 100000
        ],
        [
            'id' => '3',
            'productName' => 'Kartu-3',
            'productDesc' => 'Ini adalah kartu paling tua ketiga dengan level rarity Super Super Rare',
            'rarity' => '3',
            'price' => 5000000
        ],
        [
            'id' => '4',
            'productName' => 'Kartu-4',
            'productDesc' => 'Dengan menggunakan kartu keempat anda hanya mendapatkan kartu rare biasa',
            'rarity' => '1',
            'price' => 50000
        ],
        [
            'id' => '5',
            'productName' => 'Kartu-5',
            'productDesc' => 'Kartu ke-5 juga punya kekuatan yang sama dengan kartu keempat',
            'rarity' => '1',
            'price' => 120000
        ],
        [
            'id' => '6',
            'productName' => 'Kartu-6',
            'productDesc' => 'Masuk ke kartu keenam, kekuatannya menjadi lebih kuat karena Super Super Rare',
            'rarity' => '3',
            'price' => 960000
        ],
        [
            'id' => '7',
            'productName' => 'Kartu-7',
            'productDesc' => 'Kartu ketujuh merupakan kartu yang paling mudah di antara kartu lainnya',
            'rarity' => '2',
            'price' => 150000
        ],
        [
            'id' => '8',
            'productName' => 'Kartu-8',
            'productDesc' => 'Kartu kedelapan merupakan kartu Super Super Rare generasi terbaru',
            'rarity' => '3',
            'price' => 1000000
        ],
        [
            'id' => '9',
            'productName' => 'Kartu-9',
            'productDesc' => 'Kartu kesembilan merupakan kartu Super Rare generasi lama',
            'rarity' => '2',
            'price' => 200000
        ]
        ];

        return view('product',compact('products'));
    }

    public function detil($idProd){
        $products = [[
            'id' => '1',
            'productName' => 'Kartu1',
            'productDesc' => 'Ini adalah kartu paling tua dengan level rarity Rare',
            'rarity' => '1',
            'price' => 50000
        ],
        [
            'id' => '2',
            'productName' => 'Kartu2',
            'productDesc' => 'Ini adalah kartu paling tua kedua dengan level rarity Super Rare',
            'rarity' => '2',
            'price' => 100000
        ],
        [
            'id' => '3',
            'productName' => 'Kartu3',
            'productDesc' => 'Ini adalah kartu paling tua ketiga dengan level rarity Super Super Rare',
            'rarity' => '3',
            'price' => 5000000
        ]
        ];
        $product = $products[$idProd-1];
        return view('detil', compact('product'));
    }
}
