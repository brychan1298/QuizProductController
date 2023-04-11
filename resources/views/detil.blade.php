@extends('head')
@section('title','Detail Product')
@section('description','Ini page untuk detail product')
@section('keywords','Detail Product Semua')
@section('content')
    <div class="container mt-5">
        <a href="/" class="btn btn-danger mb-3">Back to Products</a>
        <div class="row">
            @if($product['rarity']==1)
            <div class="col-lg-12" style="background-color: #c0c0c0">
                <h1>
                    Nama : {{$product['productName']}}
                </h1>
                <p>
                    Desc : {{$product['productDesc']}}
                </p>
                <p>
                    Harga : {{$product['price']}}
                </p>


                <p style="font-weight:bold">Rarity : Rare</p>

                <p style="color:gold">Rarity : Super Rare</p>

                <p style="color:red">Rarity : Super Super Rare</p>

            </div>
            @elseif($product['rarity']==2)
            <div class="col-lg-12" style="background-color: gold">
                <h1>
                    Nama : {{$product['productName']}}
                </h1>
                <p>
                    Desc : {{$product['productDesc']}}
                </p>
                <p>
                    Harga : {{$product['price']}}
                </p>
                <p style="font-weight:bold">Rarity : Super Rare</p>
            </div>
            @else
            <div class="col-lg-12" style="background-color: red">
                <h1>
                    Nama : {{$product['productName']}}
                </h1>
                <p>
                    Desc : {{$product['productDesc']}}
                </p>
                <p>
                    Harga : {{$product['price']}}
                </p>
                <p style="font-weight:bold">Rarity : Super Super Rare</p>
            </div>
            @endif
        </div>
    </div>
@endsection
