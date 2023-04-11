@extends('head')

@section('title','Product')

@section('description','Ini adalah page untuk product')
@section('keyword','Semua Product')
@section('content')
    <div class="container">
        <h1 class="text-center mt-5">
            Silahkan pilih kartu yang anda inginkan
        </h1>
        <div class="row mt-5 mb-5">
        @foreach ($products as $prod)
            @if($prod['rarity']==1)
                <div class="col-lg-4">
                    <div style="background-color: #c0c0c0" class="m-2 p-4 rounded">
                        <a href="detil/{{$prod['id']}}" class="text-decoration-none">
                            <h1>
                                {{$prod['productName']}}
                            </h1>
                            <p>
                                {{$prod['productDesc']}}
                            </p>
                            <p class="text-white">
                                Rare Products
                            </p>
                            <p>
                                {{$prod['price']}}
                            </p>
                        </a>
                    </div>
                </div>
            @elseif($prod['rarity']==2)
                <div class="col-lg-4">
                    <div style="background-color: gold" class="mt-2 p-4 rounded">
                        <a href="detil/{{$prod['id']}}" class="text-decoration-none">
                            <h1>
                                {{$prod['productName']}}
                            </h1>
                            <p>
                                {{$prod['productDesc']}}
                            </p>
                            <p class="text-white">
                                Super Rare Products
                            </p>
                            <p>
                                {{$prod['price']}}
                            </p>
                        </a>
                    </div>
                </div>
            @else
                <div class="col-lg-4">
                    <div style="background-color: red" class="mt-2 p-4 rounded">
                        <a href="detil/{{$prod['id']}}" class="text-decoration-none">
                            <h1>
                                {{$prod['productName']}}
                            </h1>
                            <p>
                                {{$prod['productDesc']}}
                            </p>
                            <p class="text-white">
                                Super Super Rare Products
                            </p>
                            <p>
                                {{$prod['price']}}
                            </p>
                        </a>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection

