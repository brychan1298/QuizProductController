<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
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
