@extends('head')
@section('title','Detail Product')
@section('description','Ini page untuk detail product')
@section('keywords','Detail Product Semua')
@section('content')
    <div class="container mt-5">
        <a href="/" class="btn btn-danger mb-3">Back to Products</a>
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    Nama : {{$product['productName']}}
                </h1>
                <p>
                    Desc : {{$product['productDesc']}}
                </p>
                <p>
                    Harga : {{$product['price']}}
                </p>

                        @if($product['rarity']==1)
                            <p style="color:#c0c0c0">Rarity : Rare</p>
                        @elseif($product['rarity']==2)
                            <p style="color:gold">Rarity : Super Rare</p>
                        @else
                            <p style="color:red">Rarity : Super Super Rare</p>
                        @endif
            </div>
        </div>
    </div>
@endsection
